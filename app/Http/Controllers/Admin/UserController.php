<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Models\User;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\In;
use Illuminate\Validation\ValidationException;
use LogicException;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index(Request $request)
    {
        abort_if(auth()->user()->role_id !== User::SUPER_ADMIN, 403);

        $users = User::query();

        $users->when(!empty($request->search), function ($query) use ($request) {
            $query->where('name', 'LIKE', "%{$request->search}%")
                ->orWhere('username', 'LIKE', "%{$request->search}%")
                ->orWhere('class', 'LIKE', "%{$request->search}%");
        });

        $users = $users->orderBy('role_id')->orderBy('class')->latest('id')->paginate(36);

        $users = new UserCollection($users);

        $studentCount = User::where('role_id', User::STUDENT)->count();
        $nonStudentCount = User::whereIn('role_id', [User::TEACHER, User::STAFF])->count();

        return view('admin.users.index', compact('users', 'studentCount', 'nonStudentCount'));
    }

    public function create()
    {
        abort_if(auth()->user()->role_id !== User::SUPER_ADMIN, 403);

        $roles = [
            User::STUDENT => 'Murid',
            User::TEACHER => 'Guru',
            User::STAFF => 'Staff',
            User::ADMIN => 'Administrator',
        ];

        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        abort_if(auth()->user()->role_id !== User::SUPER_ADMIN, 403);

        $roleMin = User::ADMIN;
        $roleMax = User::STUDENT;

        $credentials = $request->validate([
            'name' => ['required', 'string'],
            'username' => ['required', 'string', 'unique:users,username'],
            'role_id' => ['required', 'numeric', "min:{$roleMin}", "max:{$roleMax}"],
        ]);

        $credentials['class'] = null;
        if ((int) $credentials['role_id'] === User::STUDENT) {
            $class = $request->validate([
                'class' => ['required', 'string'],
            ]);

            $credentials['class'] = $class['class'];
        }

        $password = null;
        switch ($credentials['role_id']) {
            case User::ADMIN:
                $password = 'ADMIN' . $credentials['username'];
                $credentials['password'] = bcrypt($password);
                $credentials['password_token'] = base64_encode($password);
                break;
            case User::TEACHER:
            case User::STAFF:
            case User::STUDENT:
                $password = Str::password(10, symbols: false);
                $credentials['password'] = bcrypt($password);
                $credentials['password_token'] = base64_encode($password);
                break;
        }

        User::create($credentials);

        return redirect(route('admin.users.index'))
            ->with(
                'success',
                "Berhasil menambah user. <br>
                Username: {$credentials['username']} <br>
                Password: {$password}"
            );
    }

    public function edit(User $user)
    {
        abort_if(auth()->user()->role_id !== User::SUPER_ADMIN || $user->role_id === User::SUPER_ADMIN, 403);

        $roles = [
            User::STUDENT => 'Murid',
            User::TEACHER => 'Guru',
            User::STAFF => 'Staff',
            User::ADMIN => 'Administrator',
        ];

        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        abort_if(auth()->user()->role_id !== User::SUPER_ADMIN, 403);

        $roleMin = User::ADMIN;
        $roleMax = User::STAFF;

        $data = $request->validate([
            'name' => ['required', 'string'],
            'username' => ['required', 'string'],
            'role_id' => ['required', 'numeric', "min:{$roleMin}", "max:{$roleMax}"],
        ]);

        $data['class'] = null;
        if ((int) $data['role_id'] === User::STUDENT) {
            $class = $request->validate([
                'class' => ['required', 'string'],
            ]);

            $data['class'] = $class['class'];
        }

        $password = match ((int) $data['role_id']) {
            User::ADMIN => 'ADMIN' . $data['username'],
            User::STUDENT => 'MURID' . $data['username'],
            User::TEACHER => 'GURU' . $data['username'],
            User::STAFF => 'STAFF' . $data['username']
        };
        $data['password'] = bcrypt($password);

        try {
            $user->update($data);
        } catch (Exception) {
            throw ValidationException::withMessages(['username' => 'Username ini sudah dipakai oleh user lain']);
        }

        return redirect(route('admin.users.index'))
            ->with(
                'success',
                "Berhasil mengedit user. <br>
                Username: {$data['username']} <br>
                Password: {$password}"
            );
    }

    public function destroy(User $user)
    {
        abort_if(auth()->user()->role_id !== User::SUPER_ADMIN || $user->role_id === User::SUPER_ADMIN, 403);

        try {
            $user->delete();
        } catch (LogicException) {
            return back()->withErrors('Pengguna tidak dapat dihapus karena pengguna sudah melakukan vote.', 'delete');
        }

        return redirect(route('admin.users.index'))->with('success', 'Berhasil menghapus user.');
    }

    public function csv()
    {
        abort_if(auth()->user()->role_id !== User::SUPER_ADMIN, 403);

        return view('admin.users.create-csv');
    }

    public function store_csv(Request $request): Application|RedirectResponse|Redirector|\Illuminate\Foundation\Application
    {
        abort_if(auth()->user()->role_id !== User::SUPER_ADMIN, 403);

        Storage::putFileAs('csv-file', $request->file('csv-file'), 'test.csv');

        $csvFile = storage_path('app/public/csv-file/test.csv');

        $read = fopen($csvFile, 'r');

        while (!feof($read)) {
            $data[] = fgetcsv($read, 1000, ',');
        }

        $data = new Collection($data);

        fclose($read);
        Storage::delete('app/public/csv-file/test.csv');

        $data->shift();

        try {
            DB::beginTransaction();

            $data->map(function ($item) {
                User::query()->create([
                    'name' => $item[0],
                    'username' => $item[1],
                    'role_id' => User::STUDENT,
                    'password' => bcrypt('password'),
                    'password_token' => base64_encode('password'),
                    'class' => $item[2]
                ]);
            });

            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            return redirect(route('admin.users.index'))
                ->withErrors([
                    'errors' => 'Gagal menambahkan data'
                ]);
        }

        return redirect(route('admin.users.index'))
            ->with(
                'success',
                "Berhasil menambah user."
            );
    }

    public function export()
    {
        abort_if(auth()->user()->role_id !== User::SUPER_ADMIN, 403);

        $classes = User::query()->where('role_id', User::STUDENT)
            ->select('class')->groupBy('class')->get();

        return view('admin.users.export', compact('classes'));
    }

    public function export_download(Request $request)
    {
        abort_if(auth()->user()->role_id !== User::SUPER_ADMIN, 403);

        $roleMin = User::TEACHER;
        $roleMax = User::STUDENT;

        $data = $request->validate([
            'role_id' => ['required', 'numeric', "min:{$roleMin}", "max:{$roleMax}"]
        ]);

        $classes = User::query()->where('role_id', User::STUDENT)
            ->select('class')->groupBy('class')->get();

        if ((int) $data['role_id'] === User::STUDENT) {
            $class = $request->validate([
                'class' => ['required', 'string',  Rule::in($classes->map(function ($item) {
                    return $item->class;
                }))]
            ]);

            $data['class'] = $class['class'];
        }

        $users = User::query()->where(function (Builder $query) use ($data) {
            if ((int) $data['role_id'] === User::STUDENT) {
                $query->where('class', $data['class']);
            } else {
                $query->whereIn('role_id', [User::TEACHER, User::STAFF]);
            }
        })->get();

        if ((int) $data['role_id'] === User::STUDENT) {
            return Excel::download(new UsersExport($users), $data['class']. '.xlsx');
        }

        return Excel::download(new UsersExport($users), 'Guru&Staff.xlsx');
    }
}

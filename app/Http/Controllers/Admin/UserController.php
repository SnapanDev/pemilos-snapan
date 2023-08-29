<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use LogicException;

class UserController extends Controller
{
    public function index(Request $request)
    {
        abort_if(auth()->user()->role_id !== User::SUPER_ADMIN, 404);

        $users = User::query();

        $users->when(!empty($request->search), function ($query) use ($request) {
            $query->where('name', 'LIKE', "%{$request->search}%")
                ->orWhere('username', 'LIKE', "%{$request->search}%")
                ->orWhere('class', 'LIKE', "%{$request->search}%");
        });

        $users = $users->orderBy('role_id')->latest('id')->paginate(36);

        $studentCount = User::where('role_id', User::STUDENT)->count();
        $nonStudentCount = User::whereIn('role_id', [User::TEACHER, User::STAFF])->count();

        return view('admin.users.index', compact('users', 'studentCount', 'nonStudentCount'));
    }

    public function create()
    {
        abort_if(auth()->user()->role_id !== User::SUPER_ADMIN, 404);

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
        abort_if(auth()->user()->role_id !== User::SUPER_ADMIN, 404);

        $roleMin = User::ADMIN;
        $roleMax = User::STAFF;

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
                $credentials['password'] = Cr($password);
                break;
            case User::STUDENT:
                $password = 'MURID' . $credentials['username'];
                $credentials['password'] = bcrypt($password);
                break;
            case User::TEACHER:
                $password = 'GURU' . $credentials['username'];
                $credentials['password'] = bcrypt($password);
                break;
            case User::STAFF:
                $password = 'STAFF' . $credentials['username'];
                $credentials['password'] = bcrypt($password);
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
        abort_if(auth()->user()->role_id !== User::SUPER_ADMIN || $user->role_id === User::SUPER_ADMIN, 404);

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
        abort_if(auth()->user()->role_id !== User::SUPER_ADMIN, 404);

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
        abort_if(auth()->user()->role_id !== User::SUPER_ADMIN || $user->role_id === User::SUPER_ADMIN, 404);

        try {
            $user->delete();
        } catch (LogicException) {
            return back()->withErrors('Pengguna tidak dapat dihapus karena pengguna sudah melakukan vote.', 'delete');
        }

        return redirect(route('admin.users.index'))->with('success', 'Berhasil menghapus user.');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class VoteController extends Controller
{
    public function index(Request $request)
    {
        abort_if(!in_array(auth()->user()->role_id, [User::SUPER_ADMIN, User::ADMIN]), 404);

        $users = User::with('votes')->whereNotIn('role_id', [User::SUPER_ADMIN, User::ADMIN]);

        $users->when(!empty($request->search), function ($users) use ($request) {
            $users->where(function ($query) use ($request) {
                $query->where('name', 'LIKE', "%{$request->search}%")
                    ->orWhere('username', 'LIKE', "%{$request->search}%")
                    ->orWhere('class', 'LIKE', "%{$request->search}%");
            });
        });

        $users = $users->orderBy('role_id', 'desc')
            ->orderBy('class')
            ->orderBy('name')->paginate(36);

        $users = new UserCollection($users);

        $votesStudents = DB::table('users')
            ->select('users.role_id', 'votes.id')
            ->join('votes', 'users.id', 'votes.user_id')
            ->where('votes.label', 'OSIS')
            ->where('users.role_id', User::STUDENT)
            ->count('votes.id');

        $votesTeachers = DB::table('users')
            ->select('users.role_id', 'votes.id')
            ->join('votes', 'users.id', 'votes.user_id')
            ->where('votes.label', 'OSIS')
            ->where('users.role_id', User::TEACHER)
            ->count('votes.id');

        $votesStaffs = DB::table('users')
            ->select('users.role_id', 'votes.id')
            ->join('votes', 'users.id', 'votes.user_id')
            ->where('votes.label', 'OSIS')
            ->where('users.role_id', User::STAFF)
            ->count('votes.id');

        return view('admin.votes.index', compact('users', 'votesStudents', 'votesTeachers', 'votesStaffs'));
    }
}

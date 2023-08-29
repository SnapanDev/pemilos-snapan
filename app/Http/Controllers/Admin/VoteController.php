<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Http\Request;

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

        $users = $users->orderBy('role_id', 'desc')->orderBy('class')->orderBy('name')->paginate(36);

        $votesCount = Vote::where('label', 'MPK')->count();
        $golputCount = User::doesntHave('votes')->whereNotIn('role_id', [User::SUPER_ADMIN, User::ADMIN])->count();

        return view('admin.votes.index', compact('users', 'votesCount', 'golputCount'));
    }
}

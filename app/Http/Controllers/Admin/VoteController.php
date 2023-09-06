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
        abort_if(!in_array(auth()->user()->role_id, [User::SUPER_ADMIN, User::ADMIN]), 403);

        $users = User::with('votes')->whereNotIn('role_id', [User::SUPER_ADMIN, User::ADMIN]);

        $users->when(!empty($request->search), function ($users) use ($request) {
            $users->where(function ($query) use ($request) {
                $query->where('name', 'LIKE', "%{$request->search}%")
                    ->orWhere('username', 'LIKE', "%{$request->search}%")
                    ->orWhere('class', 'LIKE', "%{$request->search}%");
            });
        });

        $votes[] = Vote::all()->map(function ($item) {
            return $item->user_id;
        });

        $users = $users->whereIn('id', $votes[0])->orderBy('role_id', 'desc')->orderBy('class')->paginate(36);

        $users = new UserCollection($users);

        $notYetVoting =
            User::query()->whereIn('role_id', [User::STAFF, User::TEACHER, User::STUDENT])->count() - Vote::query()->where('label', 'OSIS')->count();

        return view('admin.votes.index', compact('users', 'notYetVoting'));
    }
}

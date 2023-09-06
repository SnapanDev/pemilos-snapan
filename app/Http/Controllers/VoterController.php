<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Setting;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class VoterController extends Controller
{
    public function home()
    {
        return view('voter.home');
    }

    public function vote()
    {
        $canVote = Cache::remember('canVote', 5, fn() => Setting::where('attribute', 'vote')->first());

        if ($canVote?->value !== 'on') {
            if ($canVote?->value === 'off') {
                return view('voter.cannot-vote');
            } elseif ($canVote?->value === 'finish') {
                return view('voter.vote-finish');
            }

            return view('voter.cannot-vote');
        }

        if (sizeof(auth()->user()->votes) === 2) {
            return redirect()->route('logout');
        }

        $labels = Candidate::query()
            ->select('id', 'name', 'label', 'number', 'image')
            ->orderBy('number')
            ->orderBy('label', 'desc')
            ->get()
            ->groupBy('label');

        return view('voter.vote', compact('labels'));
    }

    public function submit(Request $request)
    {
        abort_if(
            in_array(auth()->user()->role_id, [User::ADMIN, User::SUPER_ADMIN])
            || sizeof(auth()->user()->votes) === 2,
            403
        );

        $canVote = Cache::remember('canVote', 5, fn() => Setting::where('attribute', 'vote')->first());

        if ($canVote?->value !== 'on') {
            return redirect()->route('vote');
        }

        $vote = $request->validate([
            'osis' => ['required', 'numeric'],
            'mpk' => ['required', 'numeric']
        ]);

        $osis = Candidate::where('id', $vote['osis'])->first();
        $mpk = Candidate::where('id', $vote['mpk'])->first();

        if ($osis->label !== 'OSIS' || $mpk->label !== 'MPK') {
            return back()->withErrors(['general' => 'Pilihan anda tidak cocok dengan label']);
        }

        auth()->user()->votes()->createMany([
            [
                'candidate_id' => $vote['osis'],
                'label' => 'OSIS'
            ],
            [
                'candidate_id' => $vote['mpk'],
                'label' => 'MPK'
            ]
        ]);

        return redirect()->route('logout');
    }

    public function logout()
    {
        abort_if(in_array(auth()->user()->role_id, [User::ADMIN, User::SUPER_ADMIN]), 403);

        if (sizeof(auth()->user()->votes) !== 2) {
            return redirect()->route('vote');
        }

        return view('voter.logout');
    }
}

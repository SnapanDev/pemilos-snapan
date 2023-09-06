<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{
    public function index()
    {
        abort_if(!in_array(auth()->user()->role_id, [User::SUPER_ADMIN, User::ADMIN]), 403);

        $labels = Candidate::orderBy('number')->get()->groupBy('label');

        return view('admin.candidates.index', compact('labels'));
    }

    public function create()
    {
        abort_if(!in_array(auth()->user()->role_id, [User::SUPER_ADMIN, User::ADMIN]), 403);

        return view('admin.candidates.create');
    }

    public function store(Request $request)
    {
        abort_if(!in_array(auth()->user()->role_id, [User::SUPER_ADMIN, User::ADMIN]), 403);

        $candidate = $request->validate([
            'name' => ['required', 'string'],
            'label' => ['required', 'string', 'in:MPK,OSIS'],
            'number' => ['required', 'numeric', 'min:1'],
            'image' => ['required', 'mimes:png,jpg,svg,webp', 'max:2048'],
        ]);

        $candidate['image'] = $request->file('image')->store('candidates');

        Candidate::create($candidate);

        return redirect()->route('admin.candidates.index')->with('success', 'Berhasil menambah kandidat.');
    }

    public function edit(Request $request, Candidate $candidate)
    {
        abort_if(!in_array(auth()->user()->role_id, [User::SUPER_ADMIN, User::ADMIN]), 403);

        return view('admin.candidates.edit', compact('candidate'));
    }

    public function update(Request $request, Candidate $candidate)
    {
        abort_if(!in_array(auth()->user()->role_id, [User::SUPER_ADMIN, User::ADMIN]), 403);

        $data = $request->validate([
            'name' => ['required', 'string'],
            'label' => ['required', 'string', 'in:MPK,OSIS'],
            'number' => ['required', 'numeric', 'min:1'],
        ]);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => ['required', 'mimes:png,jpg,svg,webp', 'max:2048'],
            ]);

            $data['image'] = $request->file('image')->store('candidates');

            Storage::delete($candidate->image);
        }

        $candidate->update($data);

        return redirect()->route('admin.candidates.index')->with('success', 'Berhasil mengedit kandidat.');
    }

    public function destroy(Candidate $candidate)
    {
        abort_if(!in_array(auth()->user()->role_id, [User::SUPER_ADMIN, User::ADMIN]), 403);

        Storage::delete($candidate->image);

        $candidate->delete();

        return redirect()->route('admin.candidates.index')->with('success', 'Berhasil menghapus kandidat.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'chirp_id' => 'required|exists:chirps,id',
            'body' => 'required|string|max:255',
        ]);

        $chirp = Chirp::findOrFail($request->input('chirp_id'));

        $reply = $chirp->replies()->create([
            'user_id' => auth()->id(),
            'body' => $request->input('body'),
        ]);

        return redirect()->back()->with('success', 'Reply submitted successfully!');
    }
}

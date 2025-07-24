<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        return view('dashboard', compact('songs'));
    }

     public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required|url'
        ]);
        
        Song::create($request->only('title', 'url'));

        return redirect()->route('dashboard')->with('success', 'Song added!');
    }

    public function destroy($id)
    {
        Song::destroy($id);
        return redirect()->route('dashboard')->with('success', 'Song deleted!');
    }
}
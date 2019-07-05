<?php

namespace App\Http\Controllers;

use App\Model\Song;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        $songs = Song::latest()->orderBy('created_at', 'DESC')->paginate(6);
        return view('public.music.index')->with(compact('songs'));
    }

    public function show($slug)
    {
        $song = Song::where('slug', $slug)->first();
        return view('public.music.show')->with(compact('song'));
    }
}

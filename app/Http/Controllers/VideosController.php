<?php

namespace App\Http\Controllers;

use App\Model\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function videos(){
        $videos = Video::latest()->paginate(10);
        return view('public.videos.videos', compact('videos'));
    }
}

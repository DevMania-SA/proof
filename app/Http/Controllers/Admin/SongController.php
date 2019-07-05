<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Song;
use Illuminate\Support\Facades\Storage;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all();
        return view('admin.music.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.music.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $song = $request->file('song');
        $slug = str_slug($request->title);
        if (isset($song)) {
            // Make unique name for the image
            //$currentDate = Carbon::now()->toDateString();

            $file_name = $song->getClientOriginalName();
            $extension = $song->getClientOriginalExtension();
            $size = $song->getClientSize();

            $filename = $request->artist . ' ft ' . $request->featured_artist . ' - ' . $request->title . '.' . $extension;
            //$filename = date('Y-m-d') . rand(11111,99999) . '.' . $extension;

            // first check if the folder exists and create it if it doesn't exist
            if (!Storage::disk('public')->exists('music')) {
                Storage::disk('public')->makeDirectory('music');
            }

            // Now save the track the specified folder above
            Storage::putFileAs('/public/music/', $song, $filename);
        }

        $song = new Song();
        $song->title = $request->title;
        $song->slug = $slug;
        $song->artist = $request->artist;
        $song->featured_artist = $request->featured_artist;
        $song->song = $filename;
        $song->size = number_format($size/1024/1024,2) . " MB";
        $song->year = date('Y');
        $song->save();

        return redirect()->route('songs.index')->with('succcess','Song successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Artist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

class ArtistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists =  Artist::latest()->orderBy('created_at', 'DESC')->paginate(10);

        return view('admin.artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$data = $request->all();
        //echo "<pre>"; print_r($data); die;

        $this->validate($request,[
            'name' => 'required',
            'details' => 'required',
            'genre' => 'required',
            'position' => 'required',
            'image' => 'image',
            'facebook' => 'sometimes',
            'twitter' => 'sometimes',
            'instagram' => 'sometimes',
        ]);

        $slug = str_slug($request->name);
        $image = $request->file('image');
        //echo "<pre>"; print_r($slug); die;

        $artist = new Artist;

        $artist->name = $request->name;
        $artist->slug = $slug;
        $artist->details = $request->details;
        $artist->genre = $request->genre;

        foreach ($request->position as $key => $val) {
            $artist->position = $val;
        }

        if(isset($image)) {
            if ($request->hasFile('image')) {
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()) {
                    // Make unique name for the image
                    $currentDate = Carbon::now()->toDateString();
                    $filename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image_tmp->getClientOriginalExtension();

                    //$large_image_path = 'images/artists/large/' . $filename;
                    $medium_image_path = 'images/artists/medium/' . $filename;
                    $small_image_path = 'images/artists/small/' . $filename;
                    $original_image_path = 'images/artists/' . $filename;

                    // Resize Images
                    //Image::make($image_tmp)->resize(1024, 767)->save($large_image_path);
                    Image::make($image_tmp)->resize(512, 383)->save($medium_image_path);
                    Image::make($image_tmp)->resize(256, 141)->save($small_image_path);
                    Image::make($image_tmp)->save($original_image_path);

                    //Storeimage name in posts table
                    $artist->image = $filename;
                }
            } else {
                $artist->image = "default.png";
            }
        }

        if (!empty($request->facebook)) {
            $artist->facebook = $request->facebook;
        } else {
            $artist->facebook = null;
        }

        if (!empty($request->twitter)) {
            $artist->twitter = $request->twitter;
        } else {
            $artist->twitter = null;
        }

        if (!empty($request->instagram)) {
            $artist->instagram = $request->instagram;
        } else {
            $artist->instagram = null;
        }

        $artist->save();

        return redirect()->route('artist.index')->with('success', 'Artist added successfully.');
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
        $artist = Artist::where('id', $id)->first();

        return view('admin.artists.edit', compact('artist'));
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
        $this->validate($request,[
            'name' => 'required',
            'details' => 'required',
            'genre' => 'required',
            'position' => 'required',
            'image' => 'image',
            'facebook' => 'sometimes',
            'twitter' => 'sometimes',
            'instagram' => 'sometimes',
        ]);

        $slug = str_slug($request->name);
        $image = $request->file('image');
        //echo "<pre>"; print_r($slug); die;

        $artist = Artist::find($id);

        $artist->name = $request->name;
        $artist->slug = $slug;
        $artist->details = $request->details;
        $artist->genre = $request->genre;

        foreach ($request->position as $key => $val) {
            $artist->position = $val;
        }

        if(isset($image)) {
            if ($request->hasFile('image')) {
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()) {
                    // Make unique name for the image
                    $currentDate = Carbon::now()->toDateString();
                    $filename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image_tmp->getClientOriginalExtension();

                    //$large_image_path = 'images/artists/large/' . $filename;
                    $medium_image_path = 'images/artists/medium/' . $filename;
                    $small_image_path = 'images/artists/small/' . $filename;
                    $original_image_path = 'images/artists/' . $filename;

                    // Resize Images
                    //Image::make($image_tmp)->resize(1024, 767)->save($large_image_path);
                    Image::make($image_tmp)->resize(512, 383)->save($medium_image_path);
                    Image::make($image_tmp)->resize(256, 141)->save($small_image_path);
                    Image::make($image_tmp)->save($original_image_path);

                    //Storeimage name in posts table
                    $artist->image = $filename;
                }
            } else {
                $artist->image = "default.png";
            }
        }

        if (!empty($request->facebook)) {
            $artist->facebook = $request->facebook;
        } else {
            $artist->facebook = null;
        }

        if (!empty($request->twitter)) {
            $artist->twitter = $request->twitter;
        } else {
            $artist->twitter = null;
        }

        if (!empty($request->instagram)) {
            $artist->instagram = $request->instagram;
        } else {
            $artist->instagram = null;
        }

        $artist->save();

        return redirect()->route('artist.index')->with('success', 'Artist updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artist =  Artist::findOrFail($id);

        $artist->destroy();

        return redirect()->back()->with('success', 'Deleted successfully.');
    }
}

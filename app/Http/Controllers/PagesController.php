<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Artist;
use App\Model\Event;
use Carbon\Carbon;
use Mail;
use App\Model\Service;
// use Mapper;


class PagesController extends Controller
{
    public function index()
    {
        return view('public.index');
    }

    public function about()
    {
        return view('public.about');
    }

    public function contact()
    {
        // Mapper::map(-26.270759, 28.112268);
        $data = [
            'title' => 'Contact Us'
        ];

        return view('public.contact')->with($data);
    }

    public function mail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:5|max:500'
        ]);

        Mail::send('public.includes.contact-message', [
            'msg' => $request->message,
            'subject' => $request->subject
        ], function ($mail) use($request){
            $mail->from($request->email, $request->name);

            $mail->to('myinbox49@live.com')->subject($request->subject);
        });

        return redirect()->back()->with('flash_message', 'Thank you for contacting us, we will get back to you soon!');
    }

    public function artists()
    {
        $artists = Artist::all();
        return view('public.artists.list-all', compact('artists'));
    }

    public function artist($slug)
    {
        $artist = Artist::where('slug', $slug)->first();
        return view('public.artists.show', compact('artist'));
    }

    public function services()
    {
        return view('public.services.list-all');
    }

    public function service($slug) {
        $service = Service::where('slug', $slug)->first();

        return view('public.services.service')->with(compact('service'));
    }
}

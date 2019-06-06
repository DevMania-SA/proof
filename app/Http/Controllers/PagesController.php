<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Artist;
use App\Model\Event;
use Carbon\Carbon;
use Mail;
use App\Model\Service;


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
        $data = [
            'title' => 'Contact Us'
        ];
        return view('public.contact')->with($data);
    }

    public function store(Request $request)
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

            $mail->to('info@proofdigitalmedia.co.za')->subject($request->subject);
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
        $data = [
            'services' => Service::all()
        ];
        return view('public.services.list-all')->with($data);
    }
}

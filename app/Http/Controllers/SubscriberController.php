<?php

namespace App\Http\Controllers;

use App\Model\Subscriber;
use Brian2694\Toastr\Toastr;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:subscribers'
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->save();
        // Toastr::success('You have successfully been added to our subscribers list :)', 'Success');
        return redirect()->back()->with('success', 'You have successfully been added to our subscribers list');
    }
}

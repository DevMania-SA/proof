<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function tags() {
        return view('public.tags.index');
    }
}

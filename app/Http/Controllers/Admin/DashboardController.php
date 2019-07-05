<?php

namespace App\Http\Controllers\Admin;

use App\Model\Post;
use App\Model\Subscriber;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        $data = [
            'subscribers' => Subscriber::all(),
            'posts' => Post::all(),
            'users' => User::all()
        ];
        return view('admin.dashboard')->with($data);
    }

    public function settings() 
    {
        return view('admin.settings');
    }
}

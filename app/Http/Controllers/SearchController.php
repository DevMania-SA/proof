<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $posts = Post::where('title',  'LIKE', "%$query%")->approved()->published()->get();

        return view('public.blog.search')->with(compact('posts','query'));
    }
}

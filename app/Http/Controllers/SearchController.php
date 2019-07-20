<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $search = request()->query('search');
        if ($search) {
            $posts = Post::where('title', 'LIKE', "%{$search}%")->simplePaginate(3);
        } else {
            $posts = Post::latest()->simplePaginate(4);
        }

        return $posts;
    }
}

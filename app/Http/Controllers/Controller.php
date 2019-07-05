<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\ProductsCategory;
use App\Model\Post;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function mainCategories()
    {
        $mainCategories = ProductsCategory::where(['parent_id' => 0])->get();
        return $mainCategories;
    }

    public function mainPosts()
    {
        $mainPosts = Post::with('categories')->latest()->inRandomOrder()->limit(3)->get();
        return $mainPosts;
    }
}

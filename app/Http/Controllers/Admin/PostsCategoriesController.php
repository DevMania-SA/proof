<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\PostsCategory;
use App\Model\Post;

class PostsCategoriesController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = PostsCategory::all();
        return view('admin.posts.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = PostsCategory::where(['parent_id' => 0])->get();
        return view('admin.posts.categories.create', compact('levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            if (empty($data['status'])) {
                $status = 0;
            } else {
                $status = 1;
            }
            $category = new PostsCategory;
            $category->parent_id = $data['parent_id'];
            $category->name = $data['name'];
            $category->description = $data['description'];
            $category->url = $data['url'];
            $category->status = $status;
            $category->save();
        }

        return redirect()->route('categories.index')->with('success', 'Category successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = PostsCategory::find($id);

        return view('admin.posts.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = PostsCategory::find($id);
        $levels = PostsCategory::where(['parent_id' => 0])->get();
        return view('admin.posts.categories.edit', compact('category','levels'));
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
        if($request->isMethod('PUT')){
            $data = $request->all();
            if (empty($data['status'])) {
                $status = 0;
            } else {
                $status = 1;
            }
            $category = PostsCategory::find($id);
            $category->parent_id = $data['parent_id'];
            $category->name = $data['name'];
            $category->description = $data['description'];
            $category->url = $data['url'];
            $category->status = $status;
            $category->update();
        }
        return redirect()->route('categories.index')->with('success', 'Category have been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!empty($id)){
            ProductsCategory::where(['id' => $id])->delete();
            return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
        }
    }

    public function categories($url = null){
        // Show 404 page if Category URL does not exist
        $countCategory = PostsCategory::where(['url' => $url, 'status' => 1])->count();
        //echo $countCategory; die;
        if ($countCategory == 0) {
            abort(404);
        }

        $categories = PostsCategory::with('categories')->where(['parent_id' => '0'])->get();
        $categoryDetails = ProductsCategory::where(['url' => $url])->first();

        if($categoryDetails->parent_id == 0){
            //if url is main category
            $subCategories = PostsCategory::where(['parent_id' => $categoryDetails->id])->get();

            foreach ($subCategories as $key => $subcat) {
                $cat_ids[] = $subcat->id ;
            }
            //print_r($cat_ids); die;
            $posts = Post::whereIn('category_id', $cat_ids)->get();
            // $products = json_decode(json_encode($products));
            //echo "<pre>"; print_r($products); die;
        } else {
            //if url is sub category
            $products = Product::where(['category_id' => $categoryDetails->id])->get();
        }
        $title = $categoryDetails->name;
        return view('pages.eshop.listing')->with(compact('categoryDetails', 'products', 'categories', 'title'));
    }
}

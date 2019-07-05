<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\Post\CreatePostRequest;
use App\Model\Post;
use App\Model\Category;
use App\Model\Tag;
use Carbon\Carbon;
use App\Notifications\AuthorPostApproved;
use App\Notifications\NewPostNotify;
use App\Model\Subscriber;
use Image;

class PostsController extends Controller
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

    public function redirect()
    {
        return redirect()->route('posts.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','DESC')->paginate(10);
        return view('admin.posts.index')->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'categories' => Category::all(),
            'tags' => Tag::all()
        ];
        return view('admin.posts.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        // dd(Auth::user()->id);
        // Upload the image to storage
        $image = $request->image->store('posts');

        $slug = str_slug($request->title);

        // Create the post
        Post::create([
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'body' => $request->body,
            'image' => $image
        ])->tags()->sync($request->tags, false);

        // $subscribers = Subscriber::all();
        // foreach ($subscribers as $subscriber) {
        //     Notification::route('mail', $subscriber->email)->notify(new NewPostNotify($post));
        // }

        return redirect()->route('posts.index')->with('success','Post have successfully been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show')->with(compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::with('tags', 'categories')->where('id', $id)->first();

        //echo "<pre>"; print_r($post); die;

        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.posts.edit')->with(compact('post', 'categories', 'tags'));
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
            'title' => 'required',
            'image' => 'image',
            'categories' => 'required',
            'tags' => 'required',
            'body' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);

        $post = Post::where('id', $id)->first();

        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = $slug;

        $post->body = $request->body;


        $post->update();

        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);

        return redirect()->route('posts.index')->with('success', 'Post have successfully been uypdated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();

        if ($post->trashed()) {
            Storage::delete($post->image);
            $post->forceDelete();
            return redirect()->back()->with('success', 'Post Successfully Deleted Permanently');
        } else {
            $post->delete();
            return redirect()->back()->with('success', 'Post Successfully Trashed');
        }
    }

    /**
     * Display the list of all trashed posts
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $trashed = Post::withTrashed()->get();

        return view('admin.posts.index')->withPosts($trashed);
    }
}

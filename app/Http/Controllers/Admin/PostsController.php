<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\Post\CreatePostRequest;
use App\Http\Requests\Admin\Post\UpdatePostRequest;
use App\Model\Post;
use App\Model\Category;
use App\Model\Tag;
use Carbon\Carbon;
use App\Notifications\AuthorPostApproved;
use App\Notifications\NewPostNotify;
use App\Model\Subscriber;
use Illuminate\Support\Str;
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
        $this->middleware('verifyCategoriesCount')->only(['create', 'store']);
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
        // dd($request->category);
        // Upload the image to storage
        $image = $request->image->store('posts');

        $slug = Str::slug($request->title);

        // Create the post
        $post = Post::create([
            'user_id' => Auth::user()->id,
            'category_id' => $request->category,
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'body' => $request->body,
            'image' => $image,
            'published_at' => $request->published_at
        ]);

        if ($request->tags) {
            $post->tags()->attach($request->tags);
        }

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
        $post = Post::with('tags', 'category')->where('id', $id)->first();

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
    public function update(UpdatePostRequest $request, $id)
    {
        $post = Post::where('id', $id)->firstOrFail();

        // Check if new image
        if ($request->hasFile('image')) {
            Storage::delete($post->image);

            $image = $request->image->store('posts');
            $post->image = $image;
        }

        $slug = Str::slug($post->title);

        // Update attributes
        $post->category_id = $request->category;
        $post->title = $request->title;
        $post->slug = $slug;
        $post->description = $request->description;
        $post->body = $request->body;
        $post->published_at = $request->published_at;
        $post->save();

        $post->tags()->sync($request->tags);

        return redirect()->route('posts.index')->with('success', 'Post have successfully been updated');
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
            $post->deleteImage();
            $post->forceDelete();
            return redirect()->back()->with('success', 'Post Successfully Deleted Permanently');
        } else {
            $post->delete();
            return redirect()->back()->with('success', 'Post Successfully been Trashed');
        }
    }

    /**
     * Display the list of all trashed posts
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $trashed = Post::onlyTrashed()->get();

        return view('admin.posts.index')->withPosts($trashed);
    }

    /**
     * Restore trashed post
     *
     * @return \Illuminate\Http\Response
     */

    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();

        $post->restore();

        return redirect()->back()->with('success', 'Post have been successfully restored');
    }
}

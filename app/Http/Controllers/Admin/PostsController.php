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
        //$data = $request->all();
        //echo "<pre>"; print_r($data); die;

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
        if(isset($image)) {
            if ($request->hasFile('image')) {
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()) {
                    // Make unique name for the image
                    $currentDate = Carbon::now()->toDateString();
                    $filename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image_tmp->getClientOriginalExtension();

                    $large_image_path = 'images/blog/large/' . $filename;
                    $medium_image_path = 'images/blog/medium/' . $filename;
                    $small_image_path = 'images/blog/small/' . $filename;
                    $original_image_path = 'images/blog/' . $filename;

                    // Resize Images
                    Image::make($image_tmp)->resize(1024, 767)->save($large_image_path);
                    Image::make($image_tmp)->resize(512, 383)->save($medium_image_path);
                    Image::make($image_tmp)->resize(256, 141)->save($small_image_path);
                    Image::make($image_tmp)->save($original_image_path);

                    //Storeimage name in posts table
                    $post->image = $filename;
                }
            } else {
                $post->image = "default.png";
            }
        }
        $post->body = $request->body;
        if(isset($request->status))
        {
            $post->status = true;
        }else {
            $post->status = false;
        }
        $post->is_approved = true;

        $post->save();

        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);

        //Toastr::success('Post Successfully Updated :)','Success');
        return redirect()->route('posts.index');
    }

    public function pending()
    {
        $posts = Post::where('is_approved', false)->get();
        return view('admin.post.pending', compact('posts'));
    }

    public function approval($id)
    {
        $post = Post::find($id);
        if ($post->is_approved == false)
        {
            $post->is_approved = true;
            $post->save();
            $post->user->notify(new AuthorPostApproved($post));

            $subscribers = Subscriber::all();
            foreach ($subscribers as $subscriber)
            {
                Notification::route('mail',$subscriber->email)
                    ->notify(new NewPostNotify($post));
            }

            // Toastr::success('Post Successfully Approved :)','Success');
        } else {
            Toastr::info('This Post is already approved','Info');
        }
        return redirect()->back();
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

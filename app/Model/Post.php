<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'description',
        'body',
        'image',
        'view_count',
        'like',
        'dislike'
    ];

    protected $dates =  [
        'published_at',
        'created_at',
        'deleted_at'
    ];

    /**
     * Delete post image from storage
     *
     * @return void
     */

    public function deleteImage()
    {
        Storage::delete($this->image);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Model\Tag', 'post_tag')->withTimestamps();
    }

    public function favourite_to_users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function comments()
    {
    	return $this->hasMany('App\Model\Comment');
    }

    public function getRouteKeyName()
    {
       return 'slug';
    }
}

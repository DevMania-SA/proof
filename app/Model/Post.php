<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->belongsTo('App\Model\Category');
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

    public function scopeApproved($query)
    {
        return $query->where('is_approved', 1);
    }

    public function scopePublished($query)
    {
        return $query->where('status', 1);
    }

    public function getRouteKeyName()
    {
       return 'slug';
    }
}

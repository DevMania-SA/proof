<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostsCategory extends Model
{
    public function posts()
    {
        return $this->belongsToMany('App\Model\Post')->withTimestamps();
    }

    public function categories(){
        return $this->hasMany('App\Model\PostsCategory','parent_id');
    }
}

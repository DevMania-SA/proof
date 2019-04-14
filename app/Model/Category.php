<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function posts()
    {
        return $this->hasMany('App\Model\Post');
    }

   // public function categories(){
   //     return $this->hasMany('App\Model\Category','parent_id');
   // }
}

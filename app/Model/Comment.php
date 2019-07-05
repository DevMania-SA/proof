<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post()
    {
    	return $this->belongsTo('App\Model\Post');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

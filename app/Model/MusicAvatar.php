<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MusicAvatar extends Model
{
    public function song()
    {
        return $this->belongsTo('App\Model\Song');
    }
}

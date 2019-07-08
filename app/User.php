<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Laratrust\Traits\LaratrustUserTrait;
use Spatie\MediaLibrary\Models\Media;

class User extends Authenticatable implements HasMedia
{
    use Notifiable;
    use HasMediaTrait;
    use LaratrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'address',
        'phone_number',
        'provider',
        'provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function addNew($input)
    {
        $check = static::where('provider_id', $input['provider_id'])->first();

        if(is_null($check)){
            return static::create($input);
        }

        return $check;
    }

    public function posts()
    {
        return $this->hasMany('App\Model\Post');
    }

    public function favourite_posts()
    {
        return $this->belongsToMany('App\Model\Post')->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }


    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
             ->width(30)
             ->height(30);
    }
}

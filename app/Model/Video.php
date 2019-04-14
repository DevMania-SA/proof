<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * Class Video
 *
 * @package App
 * @property string $name
*/
class Video extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    protected $fillable = ['name'];
    
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Component\Image;

class Post extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function location()
    {
      return $this->hasOne('App\Models\PostLocation');
    }

    public function getImageAttribute($value)
    {
        $instance = new Image();

        if(empty($value)){
            return $value;
        }
        return $instance->publicUrlPost($value);
    }
}

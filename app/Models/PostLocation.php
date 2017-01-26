<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostLocation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'post_locations';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'post_id'];

    public function post()
    {
      return $this->belongsTo('App\Models\Post');
    }
}

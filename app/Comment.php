<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //restricts columns from modifying, we either modify all of them or none
    protected $guarded = [];

    // user who has commented
    public function author()
    {
        return $this->belongsTo('App\User','from_user');
    }

    // returns post of any comment
    public function post()
    {
        return $this->belongsTo('App\Post','on_post');
    }
}

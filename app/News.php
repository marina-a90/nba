<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

    public function user() 
    {
        return $this->belongsToMany('App\User');
    }

}

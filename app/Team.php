<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public $fillabe = [
        'name', 
        'email', 
        'address', 
        'city'
    ];

    public function players() {
        return $this->hasMany(Player::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

}

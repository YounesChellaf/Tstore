<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    protected $fillable = [
        'message'
    ];

    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
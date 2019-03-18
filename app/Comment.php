<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
   protected $fillable = ['content','blog_id','author_id'];
}

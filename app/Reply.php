<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Reply extends Model
{
    protected $fillable = ['content','comment_id','author_id'];
}

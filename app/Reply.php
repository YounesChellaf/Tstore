<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Reply extends Model
{
    protected $fillable = ['content','comment_id','author_id'];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Comment(){
        return $this->hasMany(Comment::class);
    }

    public static function new(Request $request,$id){
        $reply = Reply::create([
            'content' => $request->message,
            'comment_id'=> $id,
            'author_id' => $request->user_id
        ]);
        return $reply;
    }
}

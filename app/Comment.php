<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Comment extends Model
{
   protected $fillable = ['content','blog_id','author_id'];

   public function user(){
       return $this->belongsTo(User::class);
   }
   public function blog(){
       return $this->belongsTo(Blog::class);
   }
   public static function new(Request $request,$id){
       $comment = Comment::create([
           'content' => $request->message,
           'blog_id'=> $id,
           'author_id' => $request->user_id
       ]);
       return $comment;
   }
}

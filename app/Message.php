<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Message extends Model
{
   protected $fillable = [
       'name',
       'email',
       'subject',
       'message'
   ];

   public static function new(Request $request){
       if($request->post()){
           $message = Message::create([
               'name' => $request->name,
               'email' => $request->email,
               'subject' => $request->subject,
               'message' => $request->message
           ]);
           return $message;
       }
   }
}

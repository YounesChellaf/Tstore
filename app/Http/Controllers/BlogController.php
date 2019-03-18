<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class BlogController extends Controller
{
    public function show($id){
        $blog = Blog::find($id);
        $all_blog = Blog::all();
        return view('layouts.blog-details')->with('blog',$blog)->with('all_blog',$all_blog);
    }
    public function create(Request $request,$id){
        $message = $request->input('message');
        $user_id = $request->input('user');

        Comment::create([
           'content' => $message,
            'blog_id'=> $id,
            'author_id' => $user_id
        ]);
        $blog = Blog::find($id);
        $all_blog = Blog::all();
        return view('layouts.blog-details')->with('blog',$blog)->with('all_blog',$all_blog);
    }
}

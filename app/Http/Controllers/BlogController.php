<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\ReplyRequest;
use App\Reply;

class BlogController extends Controller
{
    public function show($id){
        $blog = Blog::find($id);
        $all_blog = Blog::all();
        return view('layouts.blog-details')->with('blog',$blog)->with('all_blog',$all_blog);
    }
    public function create(CommentRequest $request,$id){
        if($request->post()){
            $validated = $request->validated();
            Comment::new($request,$id);
            $blog = Blog::find($id);
            $all_blog = Blog::all();
            return view('layouts.blog-details')->with('blog',$blog)->with('all_blog',$all_blog);
        }
    }

    public function reply(ReplyRequest $request,$id){
        if ($request->post()){
            $validated = $request->validated();
            Reply::new($request,$id);
            $blog = Blog::find($request->blog_id);
            $all_blog = Blog::all();
            return view('layouts.blog-details')->with('blog',$blog)->with('all_blog',$all_blog);
        }

    }
}

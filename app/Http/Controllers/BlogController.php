<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class BlogController extends Controller
{
    public function show($id){
        $blog = Blog::find($id);
        return view('layouts.blog-details')->with('blog',$blog);
    }
}

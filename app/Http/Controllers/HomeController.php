<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Info;
use App\Product;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product = Product::all();
        return view('layouts.home')->with('Product',$product);
    }

    public function SendMessage(MessageRequest $request){
        if ($request->post()){
            $request->validated();
            Message::new($request);
            $product = Product::all();
            return view('layouts.home')->with('product',$product);
        }
    }

    public function About(){
        return view('layouts.about');
    }

    public function Contact(){
        $info = Info::find(1);
        return view('layouts.contact')->with('info',$info);
    }
    public function Checkout(){
        return view('layouts.checkout');
    }
}

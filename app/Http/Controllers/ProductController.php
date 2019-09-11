<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        $Product= Product::orderBy('created_at','desc')->take(12)->get();
        return view('layouts.home')->with('Product',$Product);
    }

    public function getAllProducts(){
        $Product= Product::all();
        return view('layouts.home')->with('Product',$Product);
    }

//    Return type product
    public function getProducts($type){
        switch ($type){
            case 'new':
                $Product= Product::all()->where('state','option1');
                break;
            case 'used':
                $Product= Product::all()->where('state','option2');
                break;
            case 'selling':
                $Product= Product::all()->where('state','option3');
                break;
            case 'exchange':
                $Product= Product::all()->where('state','option4');
                break;
        }
        return view('layouts.home')->with('Product',$Product);
    }



//    Return type of delivering products
    public function getDeliveringProducts($type){
        switch ($type){
            case 'express':
                $Product= Product::all()->where('delivery_method','option1');
                break;
            case 'normal':
                $Product= Product::all()->where('delivery_method','option2');
                break;
        }
        return view('layouts.home')->with('Product',$Product);
    }



    public function product_details($id){
        $product =Product::find($id);
        return view('layouts.product-details')->with('product',$product);
    }
    public function category_product($id){
        $product =Product::all()->where('category_id',$id);
        return view('layouts.home')->with('Product',$product);
    }

}

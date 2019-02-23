<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function product_details($id){
        $product =Product::find($id);
        return view('layouts.product-details')->with('product',$product);
    }
    public function category_product($id){
        $product =Product::all()->where('category_id',$id);
        return view('layouts.home')->with('Product',$product);
    }
}

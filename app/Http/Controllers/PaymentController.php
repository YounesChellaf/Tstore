<?php

namespace App\Http\Controllers;


use App\Product;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function PaymentView($type){
        switch ($type){
            case 'cash':
                $Product= Product::all()->where('payment_method','option1');
                break;
            case 'e':
                $Product= Product::all()->where('payment_method','option2');
                break;
        }
        return view('layouts.home')->with('Product',$Product);
    }

}

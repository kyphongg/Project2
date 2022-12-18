<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    function viewCart(){
        return view('guest/cart');
    }

    function viewPayment(){
        return view('guest/payment');
    }
}

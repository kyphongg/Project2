<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function viewProduct(){
        return view('guest/product');
    }
}

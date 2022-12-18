<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function viewProduct(){
        return view('guest/product');
    }

    function add(){
        return view('/admin.product.add_product');
    }

    function all(){
        return view('/admin.product.all_product');
    }
}

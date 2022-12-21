<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    function viewProduct(){
        return view('admin/product/product');
    }

    function addProduct(){
        return view('admin/product/add_product');
    }
}

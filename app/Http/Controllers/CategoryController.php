<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function viewCategory(){
        return view('admin/category/category');
    }

    function addCategory(){
        return view('admin/category/add_category');
    }
}

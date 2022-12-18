<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function add(){
        return view('/admin.category.add_category');
    }

    function all(){
        return view('/admin.category.all_category');
    }

}

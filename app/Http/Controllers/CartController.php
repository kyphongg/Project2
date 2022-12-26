<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    function viewCart(){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        return view('guest/cart')->with('category',$category);
    }

    function viewPayment(){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        return view('guest/payment')->with('category',$category);
    }
}

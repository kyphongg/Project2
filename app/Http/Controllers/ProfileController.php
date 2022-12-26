<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    function viewProfile($customer_id){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        $customer = DB::table('tbl_customer')->where('customer_id',$customer_id)->first();
        return view('/guest/profile',['customer'=>$customer])->with('category',$category);

    }

    function viewOrders(){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        return view('/guest/orders')->with('category',$category);
    }

    function viewSecurity(){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        return view('/guest/security')->with('category',$category);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    function viewProfile($customer_id){
        $customer = DB::table('tbl_customer')->where('customer_id',$customer_id)->first();
        return view('/guest/profile',['customer'=>$customer]);

    }

    function viewOrders(){
        return view('/guest/orders');
    }

    function viewSecurity(){
        return view('/guest/security');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class LoginController extends Controller
{
    function viewLogin(){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        return view('guest/login')->with('category',$category);
    }

    function login(Request $request){
        $customer_email = $request -> get('customer_email');
        $customer_password = md5($request -> get('customer_password'));

        $rs = DB::table('tbl_customer')->where('customer_email',$customer_email)->where('customer_password',$customer_password)->first();
        if($rs){
            Session::put('customer_name',$rs->customer_name);
            Session::put('customer_id',$rs->customer_id);
            return redirect('/home');
        }
        else{
            Session::put('message','Email hoặc mật khẩu không hợp lệ');
            return redirect('/login');
        }
    }

    function customer_logout(){
        Session::put('customer_name',null);
        Session::put('customer_id',null);
        return redirect('/login');
    }
}

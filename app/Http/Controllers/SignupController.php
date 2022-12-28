<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class SignupController extends Controller
{
    function viewSignUp(){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        return view('guest/signup')->with('category',$category);
    }

    function customer_save(Request $request){
        $data = array();
        $data['customer_name'] = $request -> get('customer_name');
        $data['customer_phone'] = $request -> get('customer_phone');
        $data['customer_address'] = $request -> get('customer_address');
        $data['customer_email']= $request -> get('customer_email');
        $data['customer_password'] = md5($request -> get('customer_password'));
        $customer_password_again = md5($request ->get('customer_password_again'));
        if($data['customer_password']!= $customer_password_again){
            Session::put('message','Mật khẩu không khớp');
            return redirect()->route('Signup_home');
        }
        else{
            DB::table('tbl_customer')->insert(
                $data
            );
            Session::put('a','Tạo tài khoản thành công vui lòng đăng nhập');
        }
        return redirect()->route('Signup_home');
    }
}

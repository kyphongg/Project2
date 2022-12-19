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
        return view('guest/login');
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
//
//    function customer_signup(Request $request){
//        $this -> validate($request,
//        [
//            'customer_name'=>'required',
//            'customer_email'=>'required|customer_email|unique:customer_email',
//            'customer_password'=>'required|min:6|max:32',
//            'customer_password_again'=>'required|same:customer_password'
//        ],
//            [
//                'customer_name.required'=>'Bạn chưa nhập tên',
//                'customer_email.required'=>'Bạn chưa nhập email',
//                'customer_email.email'=>'Bạn chưa nhập đúng định dạng email',
//                'customer_email.unique'=>'Email đã tồn tại',
//                'customer_password.required'=>'Bạn chưa nhập mật khẩu',
//                'customer_password.min'=>'Mật khẩu ít nhất phải chứa 6 ký tự',
//                'customer_password.max'=>'Mật khẩu tối đa là 32 ký tự',
//                'customer_password_again.required'=>'Bạn chưa nhập lại mật khẩu',
//                'customer_password_again.same'=>'Mật khẩu nhập lại không khớp',
//            ]
//        );
//        $customer = new User;
//        $customer ->name = $request ->customer_name;
//
//
//    }

    function customer_logout(){
        Session::put('customer_name',null);
        Session::put('customer_id',null);
        return redirect('/login');
    }
}

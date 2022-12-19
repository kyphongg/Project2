<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    function viewHome(){
        return view('/admin/home');
    }

    function viewLogin(){
        return view('/admin/login');
    }

    function showDashboard(){
        return view('/admin/home');
    }

    function login(Request $request){
        $admin_email = $request -> get('admin_email');
        $admin_password = md5($request -> get('admin_password'));

        $rs = DB::table('tbl_admin')
            ->where('admin_email',$admin_email)
            ->where('admin_password',$admin_password)->first();
        if($rs){
            Session::put('admin_name',$rs->admin_name);
            Session::put('admin_id',$rs->admin_id);
            return redirect('/admin/home');
        }
        else{
            Session::put('message','Email hoặc mật khẩu không hợp lệ');
            return redirect('/login');
        }
    }

    function admin_logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return redirect('/admin/login');
    }
}

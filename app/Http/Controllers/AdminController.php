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

    function test(){
        return view('/layout/testadmin');
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

    function saveEmployee(Request $request){
        $data = array();
        $data['admin_name'] = $request -> get('admin_name');
        $data['admin_email'] = $request -> get('admin_email');
        $data['admin_password'] = md5($request -> get('admin_password'));
        $data['admin_level'] = $request -> get('admin_level');
        DB::table('tbl_admin')->insert(
            $data
        );
        return redirect('/admin/home');
    }

    function viewProfile(){
        $admin = DB::table('tbl_admin')->first();
        return view('/admin/profile/profile',['admin'=> $admin]);
    }

    function viewSecurity(){
        return view('/admin/profile/security');
    }

    function viewCustomerList(){
        $customer = DB::table('tbl_customer')->orderBy('customer_id')->get();
        return view('/admin/customer/customer',['customer' => $customer]);
    }

    function viewWarehouseStaffList(){
        $warehouse = DB::table('tbl_admin')->where('admin_level','=','1')->orderBy('admin_id')->get();
        return view('/admin/employee/warehousestaff/warehousestaff',['warehouse' => $warehouse]);
    }

    function viewOrderStaffList(){
        return view('/admin/employee/orderstaff/orderstaff');
    }

    function viewCareStaffList(){
        return view('/admin/employee/carestaff/carestaff');
    }

    function viewAllStaff(){
        $tbl_admin = DB::table('tbl_admin')->get();
        return view('/admin/employee/all_employee',['admin'=> $tbl_admin]);
    }

    function viewAddEmployee(){
        return view('/admin/employee/add_employee');
    }
}

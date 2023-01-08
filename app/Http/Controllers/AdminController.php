<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    function checkLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return redirect('/admin/home');
        }
        else{
            return redirect('/admin/login')->send();
        }
    }

    function viewHome(){
        $this->checkLogin();
        return view('/admin/home');
    }

    function viewLogin(){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        return view('/admin/login')->with('category',$category);
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
            Session::put('admin_level',$rs->admin_level);
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

    function viewProfile($admin_id){
        $this->checkLogin();
        $admin = DB::table('tbl_admin')->where('admin_id',$admin_id)->first();
        return view('/admin/profile/profile',['admin'=> $admin]);
    }

    function viewSecurity(){
        $this->checkLogin();
        return view('/admin/profile/security');
    }

    function viewCustomerList(){
        $this->checkLogin();
        $customer = DB::table('tbl_customer')->orderBy('customer_id')->get();
        return view('/admin/customer/customer',['customer' => $customer]);
    }

    function viewWarehouseStaffList(){
        $this->checkLogin();
        $warehouse = DB::table('tbl_admin')->where('admin_level','=','1')->orderBy('admin_id')->get();
        return view('/admin/employee/warehousestaff/warehousestaff',['warehouse' => $warehouse]);
    }

    function viewOrderStaffList(){
        $this->checkLogin();
        return view('/admin/employee/orderstaff/orderstaff');
    }

    function viewCareStaffList(){
        $this->checkLogin();
        return view('/admin/employee/carestaff/carestaff');
    }

    function viewAllStaff(){
        $this->checkLogin();
        $tbl_admin = DB::table('tbl_admin')->get();
        return view('/admin/employee/all_employee',['admin'=> $tbl_admin]);
    }

    function viewAddEmployee(){
        $this->checkLogin();
        return view('/admin/employee/add_employee');
    }

    function viewNewOrders(){
        return view('/admin/orders/new_orders');
    }

    function viewAcceptOrders(){
        $this->checkLogin();
        $order = DB::table('tbl_order')
            ->join('tbl_customer','tbl_customer.customer_id','=','tbl_order.customer_id')
            ->orderBy('tbl_order.order_id','desc')->get();
        return view('/admin/orders/accept_orders')->with('order',$order);
    }

    function viewDoneOrders(){
        return view('/admin/orders/done_orders');
    }

    function viewCancelOrders(){
        return view('/admin/orders/cancel_orders');
    }

    function viewOrdersDetails($order_id){
        $this->checkLogin();
        $order = DB::table('tbl_order')
            ->join('tbl_customer','tbl_customer.customer_id','=','tbl_order.customer_id')
            ->join('tbl_order_detail','tbl_order_detail.order_id','=','tbl_order.order_id')
            ->join('tbl_payment','tbl_payment.payment_id','=','tbl_order.payment_id')
            ->select('tbl_order.*','tbl_customer.*','tbl_order_detail.*','tbl_payment.*')
            ->first();
        return view('/admin/orders/orders_detail')->with('order',$order);
    }

    function viewComment(){
        $comment = DB::table('tbl_comment')
            ->join('tbl_game', 'tbl_game.game_id', '=', 'tbl_comment.game_id')
            ->join('tbl_customer', 'tbl_customer.customer_id', '=', 'tbl_comment.customer_id')
            ->orderBy('comment_status','desc')->get();
        return view('/admin/comment/comment')->with('comment', $comment);
    }

    function accept_comment(Request $request){
        $data= $request->all();
        $comment = Comment::find($data['comment_id']);
        $comment->comment_status = $data['comment_status'];
        $comment->save();
    }

    function reply_comment(Request $request){
        $data= $request->all();
        $comment = new Comment();
        $comment -> comment_info = $data['comment'];
        $comment -> game_id = $data['game_id'];
        $comment -> comment_parent_comment = $data['comment_id'];
        $comment -> comment_status=0;
        $comment -> customer_id;
        $comment->save();
    }
}

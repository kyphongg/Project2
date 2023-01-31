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

    function updateProfile(Request $request, $customer_id)
    {
        $customer = DB::table('tbl_customer')->where('customer_id',$customer_id)->first();
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        $data = array();
        $data['customer_phone'] = $request->get('customer_phone');
        $data['customer_address'] = $request->get('customer_address');
        //Update
        DB::table('tbl_customer')->where('customer_id',$customer_id)->update(
            $data);
        return view('/guest/cart',['customer'=>$customer])->with('category',$category);
    }

    function viewOrders($customer_id){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        $customer = DB::table('tbl_customer')
            ->where('tbl_customer.customer_id',$customer_id)->first();
        $order = DB::table('tbl_customer')
            ->join('tbl_order','tbl_order.customer_id','=','tbl_customer.customer_id')
            ->orderBy('tbl_order.created_at','desc')
            ->where('tbl_customer.customer_id',$customer_id)->get();
        return view('/guest/orders',['customer'=>$customer])->with('category',$category)->with('order',$order);
    }

    function viewOrdersDetail($customer_id ,$order_id){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        $customer = DB::table('tbl_customer')
            ->where('tbl_customer.customer_id',$customer_id)->first();
        $payment = DB::table('tbl_order')
            ->join('tbl_payment','tbl_order.payment_id','=','tbl_payment.payment_id')
            ->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
            ->where('tbl_customer.customer_id',$customer_id)->first();
        $order = DB::table('tbl_order')
            ->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
            ->join('tbl_order_detail','tbl_order_detail.order_code','=','tbl_order.order_code')
            ->join('tbl_payment','tbl_order.payment_id','=','tbl_payment.payment_id')
            ->orderBy('tbl_order.created_at','desc')
            ->where('tbl_order.order_id',$order_id)
            ->get();
        return view('/guest/orders_detail',['customer'=>$customer])->with('category',$category)->with('order',$order)->with('payment',$payment);
    }

    function receiveOrders($order_id){
        $this->checkLogin();
        $order = DB::table('tbl_order')
            ->join('tbl_customer','tbl_customer.customer_id','=','tbl_order.customer_id')
            ->orderBy('tbl_order.created_at','desc')
            ->get();
        $receive = DB::table('tbl_order')
            ->where('tbl_order.order_id',$order_id)
            ->update(['tbl_order.order_status'=>3]);
        return view('/admin/orders/accept_orders')->with('receive',$receive)->with('order',$order);
    }

    function viewSecurity(){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        return view('/guest/security')->with('category',$category);
    }
}

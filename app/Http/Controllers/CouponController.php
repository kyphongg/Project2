<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class CouponController extends Controller
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

    //View hiển thị toàn bộ danh sách
    function viewCoupon(){
        $this->checkLogin();
        $tbl_coupon=DB::table('tbl_coupon')->get();
        return view('/admin/coupon/coupon',['coupon'=>$tbl_coupon]);
    }

    //View thêm nhà sản xut
    function addCoupon(){
        $this->checkLogin();
        return view('/admin/coupon/add_coupon');
    }
    //Không có giao diện: thêm nhà sản xuất
    function saveCoupon(Request $request){
        $this->checkLogin();
        //Lấy dữ liệu
        $data = array();
        $data['coupon_name'] = $request->get('coupon_name');
        $data['coupon_text'] = $request->get('coupon_text');
        $data['coupon_status'] = $request->get('coupon_status');
        $data['coupon_number'] = $request->get('coupon_number');
        $data['coupon_quantity'] = $request->get('coupon_quantity');
        $data['coupon_serve'] = $request->get('coupon_serve');
        //Insert
        DB::table('tbl_coupon')->insert(
            $data
        );
        //chuyển hướng về trang home
        return redirect()->route('Coupon_home');
    }

    function editCoupon($coupon_id)
    {
        $this->checkLogin();
        $tbl_coupon = DB::table('tbl_coupon')->where('coupon_id', $coupon_id)->get();
        return view('admin/coupon/edit_coupon', ['coupon' => $tbl_coupon]);
    }

    function updateCoupon(Request $request, $coupon_id)
    {
        $this->checkLogin();
        $data = array();
        $data['coupon_name'] = $request->get('coupon_name');
        $data['coupon_text'] = $request->get('coupon_text');
        $data['coupon_status'] = $request->get('coupon_status');
        $data['coupon_number'] = $request->get('coupon_number');
        $data['coupon_quantity'] = $request->get('coupon_quantity');
        $data['coupon_serve'] = $request->get('coupon_serve');
        //Update
        DB::table('tbl_coupon')->where('coupon_id',$coupon_id)->update(
            $data);
        return redirect()->route('Coupon_home');
    }

    function deleteCoupon($coupon_id){
        $this->checkLogin();
        DB::table('tbl_coupon')->where('coupon_id',$coupon_id)->delete();
        return redirect()->route('Coupon_home');
    }
}

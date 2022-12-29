<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ProducerController extends Controller
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
    function viewProducer(){
        $this->checkLogin();
        $tbl_producer=DB::table('tbl_producer')->get();
        return view('/admin/producer/producer',['producer'=>$tbl_producer]);
    }

    //View thêm nhà sản xut
    function addProducer(){
        $this->checkLogin();
        return view('/admin/producer/add_producer');
    }
    //Không có giao diện: thêm nhà sản xuất
    function saveProducer(Request $request){
        $this->checkLogin();
        //Lấy dữ liệu
        $producer_name = $request->get('producerName');
        //Insert
        DB::table('tbl_producer')->insert(
            ['producer_Name'=>$producer_name]
        );
        //chuyển hướng về trang home
        return redirect()->route('Producer_home');
    }

    function editProducer($producer_id)
    {
        $this->checkLogin();
        $tbl_producer = DB::table('tbl_producer')->where('producer_id', $producer_id)->get();
        return view('admin/producer/edit_producer', ['producer' => $tbl_producer]);
    }

    function updateProducer(Request $request, $producer_id)
    {
        $this->checkLogin();
        $data = array();
        $data['producer_name'] = $request->get('producer_name');
        //Update
        DB::table('tbl_producer')->where('producer_id',$producer_id)->update(
            $data);
        return redirect()->route('Producer_home');
    }

    function deleteProducer($producer_id){
        $this->checkLogin();
        DB::table('tbl_producer')->where('producer_id',$producer_id)->delete();
        return redirect()->route('Producer_home');
    }
}

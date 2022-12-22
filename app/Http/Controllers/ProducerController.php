<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProducerController extends Controller
{
    //View hiển thị toàn bộ danh sách
    function viewProducer(){
        $tbl_producer=DB::table('tbl_producer')->get();
        return view('/admin/producer/producer',['producer'=>$tbl_producer]);
    }

    //View thêm nhà sản xut
    function addProducer(){
        return view('/admin/producer/add_producer');
    }
    //Không có giao diện: thêm nhà sản xuất
    function saveProducer(Request $request){
        //Lấy dữ liệu
        $producer_name = $request->get('producerName');
        //Insert
        DB::table('tbl_producer')->insert(
            ['producer_Name'=>$producer_name]
        );
        //chuyển hướng về trang home
        return redirect()->route('home');
    }
}

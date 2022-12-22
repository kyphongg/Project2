<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //View hiển thị toàn bộ danh sách
    function viewCategory(){
        return view('admin/category/category');
    }

    //View thêm thể loại
    function addCategory(){
        return view('admin/category/add_category');
    }
    //Không có giao diện: thêm thể loại
    function saveCategory(Request $request){
        //Lấy dữ liệu
        $category_name = $request->get('categoryName');
        //Insert
        DB::table('tbl_category')->insert(
            ['category_Name'=>$category_name]
        );
        //chuyển hướng về trang home
        return redirect()->route('home');
    }
}

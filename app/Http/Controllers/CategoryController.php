<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;

class CategoryController extends Controller
{
    //View hiển thị toàn bộ danh sách
    function viewCategory()
    {
        $tbl_category = DB::table('tbl_category')->get();
        return view('admin/category/category', ['category' => $tbl_category]);
    }

    //View thêm thể loại
    function addCategory()
    {
        return view('admin/category/add_category');
    }

    //Không có giao diện: thêm thể loại
    function saveCategory(Request $request)
    {
        //Lấy dữ liệu
        $category_name = $request->get('categoryName');
        //Insert
        DB::table('tbl_category')->insert(
            ['category_Name' => $category_name]
        );
        //chuyển hướng về trang home
        return redirect()->route('Category_home');
    }

    function editCategory($category_id)
    {
        $tbl_category = DB::table('tbl_category')->where('category_id', $category_id)->get();
        return view('admin/category/edit_category', ['category' => $tbl_category]);
    }

    function updateCategory(Request $request, $category_id)
    {
        $data = array();
        $data['category_name'] = $request->get('category_name');
        //Update
        DB::table('tbl_category')->where('category_id',$category_id)->update(
            $data);
        return redirect()->route('Category_home');
    }

    function deleteCategory($category_id){
        DB::table('tbl_category')->where('category_id',$category_id)->delete();
        return redirect()->route('Category_home');
    }

    //Client Category Page
    function viewEachCategory($category_id){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        $game = DB::table('tbl_game')
            ->join('tbl_category','tbl_category.category_id','=','tbl_game.category_id')
            ->join('tbl_producer','tbl_producer.producer_id','=','tbl_game.producer_id')
            ->join('tbl_warehouse','tbl_warehouse.game_id','=','tbl_game.game_id')
            ->first();
        return view('/guest/category',['game' => $game])->with('category',$category);
    }
}

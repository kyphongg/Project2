<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    function viewProduct()
    {
        $tbl_game = DB::table('tbl_game')->get();
        return view('admin/product/product', ['product' => $tbl_game]);
    }

    function addProduct()
    {
        $category_id = DB::table('tbl_category')->orderBy('category_id','desc')->get();
        $producer_id = DB::table('tbl_producer')->orderBy('producer_id','desc')->get();
        return view('admin/product/add_product')->with('category_id',$category_id)->with('producer_id',$producer_id);
    }

    function saveProduct(Request $request)
    {
        //Lấy dữ liệu
        $data = array();
        $data['game_name'] = $request->get('product_name');
        $data['category_id'] = $request->get('category_id');
        $data['producer_id'] = $request->get('producer_id');
        $data['game_description'] = $request->get('product_description');
        $product_image = $request->file('product_image');
        if($product_image){
            $set_image_name = $product_image->getClientOriginalName();
            $name_image = current(explode('.',$set_image_name));
            $new_image = $name_image.rand(0,99).'.'.$product_image->getClientOriginalExtension();
            $product_image->move('public/images/upload',$new_image);
            $data['game_image'] = $new_image;
        }
        //Insert
        DB::table('tbl_game')->insert(
            $data
        );
        //chuyển hướng về trang home
        return redirect()->route('Product_home');
    }

    function editProduct($product_id)
    {
        $tbl_product = DB::table('tbl_game')->where('product_id', $product_id)->get();
        return view('admin/product/edit_product', ['product' => $tbl_product]);
    }

    function updateProduct(Request $request, $category_id)
    {
        $data = array();
        $data['category_name'] = $request->category_name;
        $category_name = $request->get('category_name');
        //Update
        DB::table('tbl_category')->where('category_id', $category_id)->update(
            $data);
        return redirect()->route('Category_home');
    }

    function deleteCategory($category_id)
    {
        DB::table('tbl_category')->where('category_id', $category_id)->delete();
        return redirect()->route('Category_home');
    }
}

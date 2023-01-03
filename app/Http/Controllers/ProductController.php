<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
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

    function viewProduct()
    {
        $this->checkLogin();
        $game = DB::table('tbl_game')->join('tbl_category','tbl_category.category_id','=','tbl_game.category_id')
            ->join('tbl_producer','tbl_producer.producer_id','=','tbl_game.producer_id')
            ->orderBy('tbl_game.game_id','desc')->get();
        return view('admin/product/product', ['game' => $game]);
    }

    function addProduct()
    {
        $this->checkLogin();
        $category_id = DB::table('tbl_category')->orderBy('category_id','desc')->get();
        $producer_id = DB::table('tbl_producer')->orderBy('producer_id','desc')->get();
        return view('admin/product/add_product')->with('category_id',$category_id)->with('producer_id',$producer_id);
    }

    function saveProduct(Request $request)
    {
        $this->checkLogin();
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
        $data['game_status'] = $request ->get('product_status');
        $data['game_price_in'] = $request->get('product_price_in');
        $data['game_price_out'] = $request->get('product_price_out');
        //Insert
        DB::table('tbl_game')->insert(
            $data
        );
        //chuyển hướng về trang home
        return redirect()->route('Product_home');
    }

    function editProduct($product_id)
    {
        $this->checkLogin();
        $category_id = DB::table('tbl_category')->orderBy('category_id','desc')->get();
        $producer_id = DB::table('tbl_producer')->orderBy('producer_id','desc')->get();
        $game = DB::table('tbl_game')->where('game_id', $product_id)->get();
        return view('admin/product/edit_product', ['game' => $game])->with('category_id',$category_id)->with('producer_id',$producer_id);
    }

    function updateProduct(Request $request, $product_id)
    {
        $this->checkLogin();
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
        $data['game_status'] = $request ->get('product_status');
        $data['game_price_in'] = $request->get('product_price_in');
        $data['game_price_out'] = $request->get('product_price_out');
        //Update
        DB::table('tbl_game')->where('game_id', $product_id)->update(
            $data);
        return redirect()->route('Product_home');
    }

    function viewWarehouse(){
        $this->checkLogin();
        $ware = DB::table('tbl_warehouse')->join('tbl_game','tbl_warehouse.game_id','=','tbl_game.game_id')
            ->join('tbl_admin','tbl_warehouse.admin_id','=','tbl_admin.admin_id')
            ->orderBy('tbl_warehouse.game_id','desc')->get();
        return view('/admin/warehouse/warehouse', ['ware' => $ware]);
    }

    function addWarehouse(){
        $this->checkLogin();
        $game_id = DB::table('tbl_game')->orderBy('game_id','desc')->get();
        $admin_id = DB::table('tbl_admin')->orderBy('admin_id','desc')->get();
        return view('/admin/warehouse/add_warehouse')->with('game_id',$game_id)->with('admin_id',$admin_id);
    }

    function saveWarehouse(Request $request){
        $this->checkLogin();
        $data = array();
        $data['game_id'] = $request->get('game_id');
        $data['quantity_in'] = $request->get('quantity_in');
        $data['time_in'] = $request->get('date_in');
        $data['admin_id'] = $request->get('admin_id');
        DB::table('tbl_warehouse')->insert(
            $data
        );
        //chuyển hướng về trang home
        return redirect()->route('Warehouse_home');
    }

    function editWarehouse($warehouse_id){
        $this->checkLogin();
        $game_id = DB::table('tbl_game')->orderBy('game_id','desc')->get();
        $admin_id = DB::table('tbl_admin')->orderBy('admin_id','desc')->get();
        $ware = DB::table('tbl_warehouse')->where('warehouse_id', $warehouse_id)->get();
        return view('admin/warehouse/edit_warehouse', ['ware' => $ware])->with('game_id',$game_id)->with('admin_id',$admin_id);
    }

    function updateWarehouse(Request $request, $warehouse_id){
        $this->checkLogin();
        $data = array();
        $data['game_id'] = $request->get('game_id');
        $data['quantity_in'] = $request->get('quantity_in');
        $data['time_in'] = $request->get('date_in');
        $data['admin_id'] = $request->get('admin_id');

        //Update
        DB::table('tbl_warehouse')->where('warehouse_id', $warehouse_id)->update(
            $data);
        return redirect()->route('Warehouse_home');
    }
}

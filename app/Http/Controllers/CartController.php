<?php

namespace App\Http\Controllers;


use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class CartController extends Controller
{
    function viewCart($customer_id){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        $customer = DB::table('tbl_customer')->where('customer_id',$customer_id)->first();
        return view('guest/cart',['customer'=>$customer])->with('category',$category);
    }

    function viewSuccess(){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        return view('guest/success')->with('category',$category);
    }

    function viewPayment($customer_id){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        $customer = DB::table('tbl_customer')->where('customer_id',$customer_id)->first();
        return view('guest/payment',['customer'=>$customer])->with('category',$category);
    }

    function saveCart(Request $request, $customer_id){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        $customer = DB::table('tbl_customer')->where('customer_id',$customer_id)->first();
        Session::put('customer_id',$customer->customer_id);
        $product_id = $request -> get('product_id_hidden');
        $quantity = $request -> get('quantity');

        $product_info = DB::table('tbl_game')->where('game_id',$product_id)->first();

        $data['id'] = $request -> get('product_id_hidden');
        $data['qty'] = $quantity;
        $data['name'] = $product_info -> game_name;
        $data['price'] = $product_info -> game_price_out;
        $data['weight'] = $product_info -> game_price_in;
        $data['options']['images'] = $product_info -> game_image;
        Cart::add($data);
        Cart::setGlobalTax(1);
        return Redirect::to('/cart/'.$customer_id)->with('customer',$customer);
    }

    function deleteCart($rowId, $customer_id){
        $customer = DB::table('tbl_customer')->where('customer_id',$customer_id)->first();
        Cart::update($rowId,0);
        return Redirect::to('/cart/'.$customer_id)->with('customer',$customer);
    }

    function updateCart(Request $request, $customer_id){
        $rowId = $request -> get('rowId_cart');
        $quantity = $request -> get('quantity_cart');
        $customer = DB::table('tbl_customer')->where('customer_id',$customer_id)->first();
        Cart::update($rowId,$quantity);
        return Redirect::to('/cart/'.$customer_id)->with('customer',$customer);
    }
}

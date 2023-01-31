<?php

namespace App\Http\Controllers;


use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;

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

    function orderPlace(Request $request){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        $content = Cart::content();

        $data = array();
        $data['payment_method'] = $request -> get('payment_method');
        $data['payment_status'] = '0';
        $payment_id = DB::table('tbl_payment')->insertGetId($data);

        $oder_data = array();
        $oder_data['order_status'] = '0';
        $oder_data['customer_id'] = Session::get('customer_id');
        $oder_data['payment_id'] = $payment_id;
        $oder_data['order_total'] = Cart::total(0);
        $oder_data['order_code'] = substr(md5(microtime()),rand(0,26),5);
        $oder_data['time_in'] = Carbon::now();
        $order_id = DB::table('tbl_order')->insertGetId($oder_data);


        foreach($content as $v){
            $oder_detail_data = array();
            $oder_detail_data['order_id'] = $order_id;
            $oder_detail_data['order_code'] = $oder_data['order_code'];
            $oder_detail_data['game_id'] = $v->id;
            $oder_detail_data['game_name'] = $v->name;
            $oder_detail_data['game_price'] = $v->price;
            $oder_detail_data['game_quantity'] = $v->qty;
            $oder_detail_data['game_image'] = $v->options->images;
            DB::table('tbl_order_detail')->insert($oder_detail_data);
        }
        if($data['payment_method']==1){
            Cart::destroy();
            return view('guest/success')->with('category',$category);
        } elseif ($data['payment_method']==2){
            Cart::destroy();
            return view('guest/success')->with('category',$category);
        }
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
        Cart::setGlobalTax(0);
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

    function checkCoupon(Request $request){
        $data = $request -> get('coupon_text');
        $coupon = DB::table('tbl_coupon')->where('coupon_text',$data)->first();
        if($coupon){
            $coupon_session = Session::get('coupon');
                if($coupon_session){
                    $a = 0;
                    if($a==0){
                        $cou[] = array(
                            'coupon_text' =>$coupon->coupon_text,
                            'coupon_serve' =>$coupon->coupon_serve,
                            'coupon_number' =>$coupon->coupon_number,
                        );
                        Session::put('coupon',$cou);
                    }
                }else{
                    $cou[] = array(
                        'coupon_text' =>$coupon->coupon_text,
                        'coupon_serve' =>$coupon->coupon_serve,
                        'coupon_number' =>$coupon->coupon_number,
                    );
                    Session::put('coupon',$cou);
                }
                Session::save();
                return redirect()->back()->with('message','Thêm mã giảm giá thành công');
        }
        else{
            return redirect()->back()->with('message','Thêm mã giảm giá không thành công');
        }
    }
}

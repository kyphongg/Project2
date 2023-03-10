<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\Comment;

class HomeController extends Controller
{

    function viewHome()
    {
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        $game = DB::table('tbl_game')
            ->orderBy('tbl_game.game_id', 'desc')->get();
        $cateMoPhong = DB::table('tbl_category')->where('category_id', '=', '1')->orderBy('category_id')->get();
        $catePhieuLuu = DB::table('tbl_category')->where('category_id', '=', '2')->orderBy('category_id')->get();
        $cateHanhDong = DB::table('tbl_category')->where('category_id', '=', '3')->orderBy('category_id')->get();
        $cateNhapVai = DB::table('tbl_category')->where('category_id', '=', '4')->orderBy('category_id')->get();
        $cateChienThuat = DB::table('tbl_category')->where('category_id', '=', '5')->orderBy('category_id')->get();
        $cateTheThao = DB::table('tbl_category')->where('category_id', '=', '6')->orderBy('category_id')->get();
        return view('guest/home', ['game' => $game])->with('category', $category)
            ->with('cateMoPhong', $cateMoPhong)
            ->with('catePhieuLuu', $catePhieuLuu)->with('cateHanhDong', $cateHanhDong)
            ->with('cateNhapVai', $cateNhapVai)->with('cateChienThuat', $cateChienThuat)
            ->with('cateTheThao', $cateTheThao);
    }

    function viewDetail($id)
    {
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        $game = DB::table('tbl_game')
            ->join('tbl_category', 'tbl_category.category_id', '=', 'tbl_game.category_id')
            ->join('tbl_producer', 'tbl_producer.producer_id', '=', 'tbl_game.producer_id')
            ->join('tbl_warehouse', 'tbl_warehouse.game_id', '=', 'tbl_game.game_id')
            ->where('tbl_game.game_id',$id)
            ->first();
        $count = DB::table('tbl_game')
            ->join('tbl_category', 'tbl_category.category_id', '=', 'tbl_game.category_id')
            ->join('tbl_producer', 'tbl_producer.producer_id', '=', 'tbl_game.producer_id')
            ->join('tbl_warehouse', 'tbl_warehouse.game_id', '=', 'tbl_game.game_id')
            ->where('tbl_game.game_id',$id)
            ->sum('tbl_warehouse.quantity_in');
        $out = DB::table('tbl_order_detail')
            ->join('tbl_order', 'tbl_order.order_id', '=', 'tbl_order_detail.order_id')
            ->join('tbl_game', 'tbl_game.game_id', '=', 'tbl_order_detail.game_id')
            ->where('tbl_order_detail.game_id',$id)
            ->sum('tbl_order_detail.game_quantity');
//        $ware = DB::table('tbl_warehouse')
//            ->join('tbl_game','tbl_warehouse.game_id','=','tbl_game.game_id')
//            ->join('tbl_admin','tbl_warehouse.admin_id','=','tbl_admin.admin_id')
//            ->orderBy('tbl_warehouse.game_id','desc')
//            ->select('tbl_game.game_name','tbl_game.game_id')
//            ->distinct('tbl_game.game_name')
//            ->get();

        return view('guest/product', ['game' => $game], ['count' => $count])->with('category', $category)
            ->with('out',$out);
    }

    function search(Request $request)
    {
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        $kw = $request->get('kw_submit');
        if (!empty($kw)) {
            $search_product = DB::table('tbl_game')
                ->orderBy('tbl_game.game_id')->where('game_name', 'like', '%' . $kw . '%')->get();
        } //N???u kh??ng c?? kw => L???y to??n b??? b???n ghi
        else {
            $search_product = '`R???ng`';
//            $search_product = DB::table('tbl_game')
//                ->orderBy('tbl_game.game_id')->get();
        }
        return view('guest/search')->with('category', $category)->with('search_product', $search_product);
    }

    function viewAbout(){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        return view('guest/about')->with('category', $category);
    }

    function viewNews(){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        return view('guest/news')->with('category', $category);
    }

    function viewHiring(){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        return view('guest/hiring')->with('category', $category);
    }

    function viewHelp(){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        return view('guest/help')->with('category', $category);
    }

    function viewDKDV(){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        return view('guest/dkdv')->with('category', $category);
    }

    function viewCSBM(){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        return view('guest/csbm')->with('category', $category);
    }

    function send_comment(Request $request){
        $game_id = $request ->game_id;
        $comment_info = $request ->comment_info;
        $customer_id = $request ->customer_id;
        $customer_id = Session::get('customer_id');
        $comment = new Comment();
        $comment ->comment_info= $comment_info;
        $comment->game_id= $game_id;
        $comment->customer_id= $customer_id;
        $comment->comment_status= 1;
        $comment->comment_parent_comment= 0;
        $comment->save();
    }

    function load_comment(Request $request){
        $game_id = $request ->game_id;
        $comment= Comment::where('game_id',$game_id)
            ->where('comment_parent_comment','=',0)
            ->where('comment_status',0)->join('tbl_customer', 'tbl_customer.customer_id', '=', 'tbl_comment.customer_id')
            ->get();
        $comment_reply = DB::table('tbl_comment')
            ->join('tbl_game', 'tbl_game.game_id', '=', 'tbl_comment.game_id')
            ->join('tbl_customer', 'tbl_customer.customer_id', '=', 'tbl_comment.customer_id')
            ->where('comment_parent_comment','>',0)
            ->orderBy('comment_id','desc')
            ->get();
        $output= '';
        foreach($comment as $key =>$comm){
            $output.= '
              <div class="row style_comment">
                <div class="col-md-2">
                    <img style="width: 80px;" src="/images/avataricon.png">
                </div>
                <div class="col-md-10">
                    <p style="line-height: 0.5;"><b>' . $comm->customer_name . '</b></p>
                    <p style="color: #6B7684;">B??nh lu???n v??o l??c: ' . $comm->created_at . '</p>
                    <p>' . $comm->comment_info . '</p>
                </div>
            </div>
             <p></p>
             ';
            foreach ($comment_reply as $kw =>$com_reply) {
                if ($com_reply->comment_parent_comment == $comm->comment_id) {
                    $output .= '
                   <div class="row style_comment" style="margin-left: 90px; margin-bottom: 35px;">
                    <div class="col-md-1">
                        <img style="width: 50px;" src="/images/gamingstore-logooo.png">
                    </div>
                    <div class="col-md-11" style="margin-top: 5px;">
                        <p style="line-height: 0.5;margin-left: 30px; color: #2579F2;"><b>GamingStore_Admin</b></p>
                        <p style="color: #000000;margin-left: 30px;"><b style="font-weight: 500">Tr??? l???i: </b>' .$com_reply->comment_info. '</p>
                    </div>
                </div>
                 <p></p>
            ';

                }
            }
        }
        echo $output;
    }
}


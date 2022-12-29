<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function viewHome()
    {
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        $game = DB::table('tbl_game')->join('tbl_warehouse', 'tbl_warehouse.game_id', '=', 'tbl_game.game_id')
            ->orderBy('tbl_game.game_id', 'desc')->get();
        $cateMoPhong = DB::table('tbl_category')->where('category_id', '=', '1')->orderBy('category_id')->get();
        $catePhieuLuu = DB::table('tbl_category')->where('category_id', '=', '2')->orderBy('category_id')->get();
        $cateHanhDong = DB::table('tbl_category')->where('category_id', '=', '3')->orderBy('category_id')->get();
        $cateNhapVai = DB::table('tbl_category')->where('category_id', '=', '4')->orderBy('category_id')->get();
        $cateChienThuat = DB::table('tbl_category')->where('category_id', '=', '5')->orderBy('category_id')->get();
        $cateTheThao = DB::table('tbl_category')->where('category_id', '=', '6')->orderBy('category_id')->get();
        return view('guest/home', ['game' => $game])->with('category', $category)->with('cateMoPhong', $cateMoPhong)
            ->with('catePhieuLuu', $catePhieuLuu)->with('cateHanhDong', $cateHanhDong)
            ->with('cateNhapVai', $cateNhapVai)->with('cateChienThuat', $cateChienThuat)
            ->with('cateTheThao', $cateTheThao);
    }

//    function viewDetailProduct($id)
//    {
//        $category = DB::table('tbl_category')->orderBy('category_id')->get();
////        $game = DB::table('tbl_game')->join('tbl_warehouse', 'tbl_game.game_id', '=', 'tbl_warehouse.game_id')
//////            ->orderBy('tbl_game.game_id', 'desc')->get();
////        $game = DB::table('tbl_game')
////            ->join('tbl_category','tbl_category.category_id','=','tbl_game.category_id')
////            ->join('tbl_producer','tbl_producer.producer_id','=','tbl_game.producer_id')
////            ->join('tbl_warehouse','tbl_warehouse.game_id','=','tbl_game.game_id')
////            ->where('game_id',$id)->first();
////            ->where('game_id',$game_id)->first();
////        $game = DB::table('tbl_game')->join('tbl_category','tbl_category.category_id','=','tbl_game.category_id')
////            ->join('tbl_producer','tbl_producer.producer_id','=','tbl_game.producer_id')
////            ->join('tbl_warehouse','tbl_warehouse.game_id','=','tbl_game.game_id')
////            ->orderBy('tbl_game.game_id','desc')->first();
////        return view('guest/product',['game'=> $game])->with('category',$category);
//    }

    function viewDetail($id){
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        $game = DB::table('tbl_game')
//            ->join('tbl_game','tbl_warehouse.game_id','=','tbl_game.game_id')
            ->join('tbl_category','tbl_category.category_id','=','tbl_game.category_id')
            ->join('tbl_producer','tbl_producer.producer_id','=','tbl_game.producer_id')
            ->where('game_id',$id)
            ->first();
        return view('guest/product',['game'=> $game])->with('category',$category);
    }
}

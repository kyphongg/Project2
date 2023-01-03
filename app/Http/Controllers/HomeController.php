<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

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
            ->where('tbl_game.game_id', $id)
            ->first();
        $count = DB::table('tbl_game')
            ->join('tbl_category', 'tbl_category.category_id', '=', 'tbl_game.category_id')
            ->join('tbl_producer', 'tbl_producer.producer_id', '=', 'tbl_game.producer_id')
            ->join('tbl_warehouse', 'tbl_warehouse.game_id', '=', 'tbl_game.game_id')
            ->where('tbl_game.game_id', $id)
            ->sum('quantity_in');
        return view('guest/product', ['game' => $game], ['count' => $count])->with('category', $category);
    }

    function search(Request $request)
    {
        $category = DB::table('tbl_category')->orderBy('category_id')->get();
        $kw = $request->get('kw_submit');
        if (!empty($kw)) {
            $search_product = DB::table('tbl_game')
                ->orderBy('tbl_game.game_id')->where('game_name', 'like', '%' . $kw . '%')->get();
        } //Nếu không có kw => Lấy toàn bộ bản ghi
        else {
            $search_product = '`Rỗng`';
//            $search_product = DB::table('tbl_game')
//                ->orderBy('tbl_game.game_id')->get();
        }
        return view('guest/search')->with('category', $category)->with('search_product', $search_product);
    }
}

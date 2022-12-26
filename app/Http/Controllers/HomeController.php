<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function viewHome(){
        $game = DB::table('tbl_game')->join('tbl_warehouse','tbl_warehouse.game_id','=','tbl_game.game_id')
            ->orderBy('tbl_game.game_id','desc')->get();
        return view('guest/home', ['game' => $game]);
    }

    function viewDetailProduct(){
        return view('guest/product');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlideController extends Controller
{
    function add(){
        return view('/admin.slide.add_slide');
    }

    function all(){
        return view('/admin.slide.all_slide');
    }
}

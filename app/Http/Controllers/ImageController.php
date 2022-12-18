<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    function add(){
        return view('/admin.image.add_image');
    }

    function all(){
        return view('/admin.image.all_image');
    }
}

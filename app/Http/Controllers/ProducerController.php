<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProducerController extends Controller
{
    function add(){
        return view('/admin.producer.add_producer');
    }

    function all(){
        return view('/admin.producer.all_producer');
    }
}

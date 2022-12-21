<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProducerController extends Controller
{
    function viewProducer(){
        return view('/admin/producer/producer');
    }

    function addProducer(){
        return view('/admin/producer/add_producer');
    }
}

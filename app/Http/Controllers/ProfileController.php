<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function viewProfile(){
        return view('/guest/profile');
    }

    function viewOrders(){
        return view('/guest/orders');
    }

    function viewSecurity(){
        return view('/guest/security');
    }
}

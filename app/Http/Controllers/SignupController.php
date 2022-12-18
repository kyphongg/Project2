<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    function viewSignUp(){
        return view('guest/signup');
    }
}

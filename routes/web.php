<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SlideController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

//Client Home
Route::get('/home', [HomeController::class,'viewHome']);

//Client Login & Signup & Logout
Route::get('/login', [LoginController::class,'viewLogin']);
Route::post('/customer_login',[LoginController::class,'login']);

Route::get('/signup', [SignupController::class,'viewSignUp']);

Route::get('/logout',[LoginController::class,'logout']);

//Client profile
Route::get('/profile', [ProfileController::class,'viewProfile']);

Route::get('/orders', [ProfileController::class,'viewOrders']);

Route::get('/security', [ProfileController::class,'viewSecurity']);

//Client product cart &payment
Route::get('/product',[ProductController::class,'viewProduct']);

Route::get('/cart', [CartController::class, 'viewCart']);

Route::get('/payment', [CartController::class, 'viewPayment']);

//Admin login & Logout
Route::get('/admin/login',[AdminController::class,'viewLogin']);
Route::post('/admin_login',[AdminController::class,'login']);

Route::get('/logout',[AdminController::class,'logout']);

//Admin home
Route::get('/admin/home', [AdminController::class,'viewHome']);

//Admin function

Route::get('/add_category',[CategoryController::class,'add']);
Route::get('/all_category',[CategoryController::class,'all']);

Route::get('/add_producer',[ProducerController::class,'add']);
Route::get('/all_producer',[ProducerController::class,'all']);

Route::get('/add_product',[ProductController::class,'add']);
Route::get('/all_product',[ProductController::class,'all']);

Route::get('/add_image',[ImageController::class,'add']);
Route::get('/all_image',[ImageController::class,'all']);

Route::get('/add_slide',[SlideController::class,'add']);
Route::get('/all_slide',[SlideController::class,'all']);




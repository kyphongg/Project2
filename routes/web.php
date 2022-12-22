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
Route::get('/customer_signup', [SignupController::class,'customer_signup']);

Route::get('/customer_logout',[LoginController::class,'customer_logout']);
Route::post('/customer_signup',[LoginController::class,'customer_signup']);

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

Route::get('/admin_logout',[AdminController::class,'admin_logout']);

//Admin home
Route::get('/admin/home', [AdminController::class,'viewHome']);

//Admin function
Route::get('/admin/categories',[CategoryController::class, 'viewCategory'])->name('home');
Route::get('/admin/categories_add',[CategoryController::class, 'addCategory']);
Route::post('/admin/categories_add',[CategoryController::class, 'saveCategory']);

Route::get('/admin/producers',[ProducerController::class, 'viewProducer']);
Route::get('/admin/producers_add',[ProducerController::class, 'addProducer']);

Route::get('/admin/products',[\App\Http\Controllers\AdminProductController::class, 'viewProduct']);
Route::get('/admin/products_add',[\App\Http\Controllers\AdminProductController::class, 'addProduct']);

Route::get('/test_admin',[AdminController::class,'test']);




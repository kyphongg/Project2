<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductController;
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

//Admin profile
Route::get('/admin/profile',[AdminController::class,'viewProfile']);
Route::get('/admin/security', [AdminController::class,'viewSecurity']);

//Admin login & Logout
Route::get('/admin/login',[AdminController::class,'viewLogin']);
Route::post('/admin_login',[AdminController::class,'login']);

Route::get('/admin_logout',[AdminController::class,'admin_logout']);

//Admin home
Route::get('/admin/home', [AdminController::class,'viewHome']);

//Admin function viewCategory
Route::get('/admin/categories',[CategoryController::class, 'viewCategory'])->name('Category_home');
Route::get('/admin/categories_add',[CategoryController::class, 'addCategory']); //-> Admin addCategory
Route::post('/admin/categories_add',[CategoryController::class, 'saveCategory']); // -> addCategory: no View
Route::get('/admin/edit-category/{category_id}',[CategoryController::class,'editCategory']);
Route::post('/admin/update-category/{category_id}',[CategoryController::class, 'updateCategory']);
Route::get('/admin/delete-category/{category_id}',[CategoryController::class,'deleteCategory']);

Route::get('/admin/producers',[ProducerController::class, 'viewProducer'])->name('Producer_home');
Route::get('/admin/producers_add',[ProducerController::class, 'addProducer']);//-> Admin addProducer
Route::post('/admin/producers_add',[ProducerController::class, 'saveProducer']); // -> addProducer: no View
Route::get('/admin/edit-producer/{producer_id}',[ProducerController::class,'editProducer']);
Route::post('/admin/update-producer/{producer_id}',[ProducerController::class, 'updateProducer']);
Route::get('/admin/delete-producer/{producer_id}',[ProducerController::class,'deleteProducer']);

Route::get('/admin/products',[ProductController::class, 'viewProduct'])->name('Product_home');
Route::get('/admin/products_add',[ProductController::class, 'addProduct']);
Route::post('/admin/products_save',[ProductController::class, 'saveProduct']); // -> addProducer: no View
Route::get('/admin/edit-product/{product_id}',[ProductController::class,'editProduct']);
Route::post('/admin/update-product/{product_id}',[ProductController::class, 'updateProduct']);

Route::get('/admin/warehouse',[ProductController::class,'viewWarehouse'])->name('Warehouse_home');
Route::get('/admin/warehouse_add',[ProductController::class,'addWarehouse']);//->Admin addWarehouse
Route::post('/admin/warehouse_save',[ProductController::class, 'saveWarehouse']);
Route::get('/admin/edit-warehouse/{warehouse_id}',[ProductController::class,'editWarehouse']);
Route::post('/admin/update-warehouse/{warehouse_id}',[ProductController::class, 'updateWarehouse']);

Route::get('/test_admin',[AdminController::class,'test']);




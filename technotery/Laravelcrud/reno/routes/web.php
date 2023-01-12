<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FrontendProductController;
use App\Http\Controllers\Frontend\CartController;

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
    return view('welcome');
});

Route::group(['middleware'=>['afterlogin']], function()
{

   
    Route::get('/logout',[LoginController::class,'logout'])->name('Logout');

    Route::get('/index', function () {return view('Backend.index');})->name('index');

    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category',[CategoryController::class,'index'])->name('category.index');
    Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('/category/show/{id}',[CategoryController::class,'show'])->name('category.show');


    Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
    Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
    Route::get('/product',[ProductController::class,'index'])->name('product.index');
    Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
    Route::get('/product/show/{id}',[ProductController::class,'show'])->name('product.show');
    Route::get('/product/status/{id}',[ProductController::class,'status'])->name('product.status');
    Route::post('/update-image-status',[ProductController::class,'imageupdate']);
    

    Route::get('/register/create',[RegisterController::class,'create'])->name('register.create');
    Route::post('/register/store',[RegisterController::class,'store'])->name('register.store');
    Route::get('/register',[RegisterController::class,'index'])->name('register.index');
    Route::get('/registerindex',[RegisterController::class,'fetchstudent'])->name('ajaxGetRegister');
    Route::get('registeredit/{id}',[RegisterController::class,'edit']);
    Route::put('registupdate/{id}',[RegisterController::class,'update']);
    Route::delete('registerdelete/{id}',[RegisterController::class,'destroy']);
    /////////////////////////////////////Frontend side pages///////////////////////////////////////////
    Route::get('/wishlist',[IndexController::class,'wishlist'])->name('index.wishlist');
    Route::post('/unwishlist',[IndexController::class,'unwishlist'])->name('index.unwishlist');

    Route::get('/addtocart',[CartController::class,'addcartview'])->name('addtocart');
    Route::post('/removecart',[CartController::class,'removecartview'])->name('carttrash');
    
   ///////////////////////////////////////////////////xdgndthsthsrt//////////////////////////////////////////////////

   
});

// Route::get('/login', function () {return view('Backend.login');});

// Route::get('/adminlogin',[LoginController::class,'login'])->name('login-page');
Route::get('/adminlogin',[LoginController::class,'login'])->name('login-page');
Route::post('/login',[LoginController::class,'postLogin'])->name('login');


Route::get('/ajax',[AjaxController::class,'ajaxGet'])->name('ajaxGet');


Route::get('/ajax-json',[AjaxController::class,'ajaxGetUser'])->name('ajaxGetUser');



/////////////////////////////frontend///////////////////////////////////////////////



     // Route::get('/productdetail', function () {return view('Frontend.productdetail');})->name('frontend.productdetail');
     Route::get('/home',[IndexController::class,'frontedcategory'])->name('frontend.home');
     Route::post('/indexfavourite',[FrontendProductController::class,'favourite'])->name('index.favourite');
     Route::get('/findproduct/{id}',[FrontendProductController::class,'frontedfindproduct'])->name('frontend.findproduct');
     Route::get('/productdetail/{id}',[FrontendProductController::class,'frontedproduct'])->name('frontend.productdetail');
     Route::get('/allproduct',[FrontendProductController::class,'frontedallproduct'])->name('frontend.allproduct');

     Route::post('/addtocart',[CartController::class,'addtocart'])->name('frontend.addtocart');
     

     Route::get('/about', function () {return view('Frontend.about');})->name('frontend.about');
     Route::get('/checkout', function () {return view('Frontend.checkout');})->name('frontend.checkout');
     Route::get('/icon', function () {return view('Frontend.icon');})->name('frontend.icon');
     Route::get('/contact', function () {return view('Frontend.contact');})->name('frontend.contact');
     Route::get('/products', function () {return view('Frontend.product');})->name('frontend.product');
     Route::get('/service', function () {return view('Frontend.service');})->name('frontend.service');
     Route::get('/shop', function () {return view('Frontend.shop');})->name('frontend.shop');
     Route::get('/single', function () {return view('Frontend.single');})->name('frontend.single');
     Route::get('/typography', function () {return view('Frontend.typography');})->name('frontend.typography');
     Route::get('/payment', function () {return view('Frontend.payment');})->name('frontend.payment');





<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\RegisterController;

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
    

    Route::get('/register/create',[RegisterController::class,'create'])->name('register.create');
   
   
});

// Route::get('/login', function () {return view('Backend.login');});

Route::get('/adminlogin',[LoginController::class,'login'])->name('login-page');
Route::get('/adminlogin',[LoginController::class,'login'])->name('login-page');
Route::post('/login',[LoginController::class,'postLogin'])->name('login');


Route::get('/ajax',[AjaxController::class,'ajaxGet'])->name('ajaxGet');


Route::get('/ajax-json',[AjaxController::class,'ajaxGetUser'])->name('ajaxGetUser');







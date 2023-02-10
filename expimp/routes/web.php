<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImportController;

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


Route::get('/Registrationview',[RegisterController::class,'create'])->name('register');
Route::post('/Registrationadd',[RegisterController::class,'store'])->name('Registrationadd');

Route::get('/loginview',[LoginController::class,'create'])->name('Loginview');
Route::post('/login',[LoginController::class,'login'])->name('Login');



Route::get('/home',[ImportController::class,'create']);
Route::post('/homeadd',[ImportController::class,'store'])->name('home.add');
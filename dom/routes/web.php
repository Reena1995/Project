<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dom_Controller;

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

Route::get('/generatepdf',[Dom_Controller::class,'pdf']);

Route::get('/show',[Dom_Controller::class,'show']);

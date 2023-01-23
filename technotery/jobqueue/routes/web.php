<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\sendEmailJob;
use App\Http\Controllers\RegisterController;
use App\Jobs\sendDataJob;

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


// Route::get('/sendmail',[RegisterController::class,'mail']);
Route::get('/register',[RegisterController::class,'create']);
Route::post('/registeradd',[RegisterController::class,'store'])->name('register.store');







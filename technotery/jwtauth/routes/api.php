<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategorieController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware'=>'api','prefix'=>'auth'],function($router){

    Route::post('/register',[AuthController::class,'register']);
    Route::post('/login',[AuthController::class,'login']);
    Route::get('/profile',[AuthController::class,'profile']);
    Route::post('/logout',[AuthController::class,'logout']);


});


Route::get('/categoryapi',[CategorieController::class,'indexapi'])->name('category.index');
Route::post('/categoryadd',[CategorieController::class,'addapi'])->name('category.store');
Route::put('/categoryupdate/{id}',[CategorieController::class,'updateapi'])->name('category.update');
Route::delete('/categorydelete/{id}',[CategorieController::class,'deleteapi'])->name('category.delete');
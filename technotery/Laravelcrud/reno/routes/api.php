<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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

Route::get('/categoryapi',[CategoryController::class,'indexapi'])->name('category.index');
Route::post('/categoryadd',[CategoryController::class,'addapi'])->name('category.store');
Route::put('/categoryupdate/{id}',[CategoryController::class,'updateapi'])->name('category.update');
Route::delete('/categorydelete/{id}',[CategoryController::class,'deleteapi'])->name('category.delete');

<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\sendDataJob;
use App\Models\Register;
use App\Http\Controllers\CroneController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
    \Artisan::call('queue:work');
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* frontend process run backend in faker entry work using jobqueue start*/ 
Route::get('/home', function () {
    dispatch(new sendDataJob());
    return view('prac');
});
/* frontend process run backend in faker using jobqueue  entry work end */ 


/* job queue through csv file data to insert data base start */
Route::get('/crone',[CroneController::class,'create']);
Route::post('/croneadd',[CroneController::class,'store'])->name('crone.store');
/* job queue through csv file data to insert data base start */


/* read file from csvfile start*/ 
Route::get('/readfile',[CroneController::class,'readfile'])->name('crone.readfile');
/* read file from csvfile end*/ 
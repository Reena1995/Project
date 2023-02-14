<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\LoginController;




Route::get('login',[LoginController::class,'create'])->name('login');
Route::post('authnication',[LoginController::class,'login'])->name('authnication');




Route::group(['middleware'=>['afterlogin']], function()
{
    
    Route::get('/logout',[LoginController::class,'logout'])->name('Logout');
    Route::get('/employee-dashboard', function () {return view('role.employee.modules.dashboard');})->name('employee.dashboard');

    Route::get('/add-employee', function () {return view('role.admin.modules.employee.add-employees');})->name('employee.create');

    Route::get('/admin-dashboard', function () {return view('role.admin.modules.dashboard');})->name('admin.dashboard');

    /* ----------------- ----------   department start  -------------------------*/
    Route::get('/department-create',[DepartmentController::class,'create'])->name('department.create');
    Route::post('/department-store',[DepartmentController::class,'store'])->name('department.add');
    Route::get('/department-index',[DepartmentController::class,'index'])->name('department.index');
    Route::get('/department/show/{id}',[DepartmentController::class,'show'])->name('department.show');
    Route::get('/department/edit/{id}',[DepartmentController::class,'edit'])->name('department.edit');
    Route::post('/department/update/{id}',[DepartmentController::class,'update'])->name('department.update');
    Route::get('/department/status/{id}',[DepartmentController::class,'status'])->name('department.status');
    /* ----------------- ----------   department end  -------------------------*/

    /* ----------------- ----------   designation start  -------------------------*/
    Route::get('/designation-create',[DesignationController::class,'create'])->name('designation.create');
    Route::post('/designation-store',[DesignationController::class,'store'])->name('designation.add');
    Route::get('/designation-index',[DesignationController::class,'index'])->name('designation.index');
    Route::get('/designation/show/{id}',[DesignationController::class,'show'])->name('designation.show');
    Route::get('/designation/edit/{id}',[DesignationController::class,'edit'])->name('designation.edit');
    Route::post('/designation/update/{id}',[DesignationController::class,'update'])->name('designation.update');
    Route::get('/designation/status/{id}',[DesignationController::class,'status'])->name('designation.status');
    /* ----------------- ----------   designation end  -------------------------*/

});

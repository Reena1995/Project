<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LoginController;




Route::get('login',[LoginController::class,'create'])->name('login');
Route::post('authnication',[LoginController::class,'login'])->name('authnication');




Route::group(['middleware'=>['afterlogin']], function()
{
    
    Route::get('/logout',[LoginController::class,'logout'])->name('Logout');
    Route::get('/employee-dashboard', function () {return view('role.employee.modules.dashboard');})->name('employee.dashboard');

    Route::get('/add-employee', function () {return view('Console.Modules.employee.add-employees');})->name('department.create');

    Route::get('/dashboard', function () {return view('role.admin.modules.dashboard');})->name('admin.dashboard');

    /* ----------------- ----------   department start  -------------------------*/
    Route::get('/department-create',[DepartmentController::class,'create'])->name('department.create');
    Route::post('/department-store',[DepartmentController::class,'store'])->name('department.add');

    /* ----------------- ----------   department end  -------------------------*/

});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrganizationRoleController;




Route::get('login',[LoginController::class,'create'])->name('login');
Route::post('authnication',[LoginController::class,'login'])->name('authnication');




Route::group(['middleware'=>['afterlogin']], function()
{
    
    Route::get('/logout',[LoginController::class,'logout'])->name('Logout');
    Route::get('/employee-dashboard', function () {return view('employee.modules.dashboard');})->name('employee.dashboard');

    Route::get('/add-employee', function () {return view('employee.modules.employee.add-employees');})->name('employee.create');

    Route::get('/admin-dashboard', function () {return view('admin.modules.dashboard');})->name('admin.dashboard');

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

     /* ----------------- ----------   Organization_Role start  -------------------------*/
     Route::get('/organization_role-create',[OrganizationRoleController::class,'create'])->name('organization_role.create');
     Route::post('/organization_role-store',[OrganizationRoleController::class,'store'])->name('organization_role.add');
     Route::get('/organization_role-index',[OrganizationRoleController::class,'index'])->name('organization_role.index');
     Route::get('/organization_role/show/{id}',[OrganizationRoleController::class,'show'])->name('organization_role.show');
     Route::get('/organization_role/edit/{id}',[OrganizationRoleController::class,'edit'])->name('organization_role.edit');
     Route::post('/organization_role/update/{id}',[OrganizationRoleController::class,'update'])->name('organization_role.update');
     Route::get('/organization_role/status/{id}',[OrganizationRoleController::class,'status'])->name('organization_role.status');
     /* ----------------- ----------   Organization_Role end  -------------------------*/
});

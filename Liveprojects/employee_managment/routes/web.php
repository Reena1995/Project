<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrganizationRoleController;
use App\Http\Controllers\CompanyLocationController;
use App\Http\Controllers\CompanyLocationTypeController;
use App\Http\Controllers\MediumOfInstructionController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\EducationLevelController;
use App\Http\Controllers\DocumentTypeController;
use App\Http\Controllers\AssetBrandController;
use App\Http\Controllers\AssetTypeController;
use App\Http\Controllers\AssetSubTypeController;
use App\Http\Controllers\CurrentResidenceTypeController;
use App\Http\Controllers\ModeOfTransportationController;
use App\Http\Controllers\LeaveTypeController;
use App\Http\Controllers\ImageController;




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

     /* ----------------- ----------  company location start  -------------------------*/
        Route::group(['prefix'=>'company-location/','middleware'=>[],'as'=>'company_location.'], function(){
            Route::get('/create',[CompanyLocationController::class,'create'])->name('create');
            Route::post('/store',[CompanyLocationController::class,'store'])->name('add');
            Route::get('/',[CompanyLocationController::class,'index'])->name('index');
            Route::get('/show/{id}',[CompanyLocationController::class,'show'])->name('show');
            Route::get('/edit/{id}',[CompanyLocationController::class,'edit'])->name('edit');
            Route::post('/update/{id}',[CompanyLocationController::class,'update'])->name('update');
            Route::get('/status/{id}',[CompanyLocationController::class,'status'])->name('status');
     });
     /* ----------------- ----------   company location end  -------------------------*/

      /* ----------------- ---------- company location type start  -------------------------*/
        Route::group(['prefix'=>'company-location-type/','middleware'=>[],'as'=>'company_location_type.'], function(){
            Route::get('/create',[CompanyLocationTypeController::class,'create'])->name('create');
            Route::post('/store',[CompanyLocationTypeController::class,'store'])->name('add');
            Route::get('/',[CompanyLocationTypeController::class,'index'])->name('index');
            Route::get('/show/{id}',[CompanyLocationTypeController::class,'show'])->name('show');
            Route::get('/edit/{id}',[CompanyLocationTypeController::class,'edit'])->name('edit');
            Route::post('/update/{id}',[CompanyLocationTypeController::class,'update'])->name('update');
            Route::get('/status/{id}',[CompanyLocationTypeController::class,'status'])->name('status');
        });
     /* ----------------- ---------- company  location type end  -------------------------*/

     /* ----------------- ---------- medium of instruction type start  -------------------------*/
     Route::group(['prefix'=>'medium-instruction-type/','middleware'=>[],'as'=>'medium_instruction.'], function(){
        Route::get('/create',[MediumOfInstructionController::class,'create'])->name('create');
        Route::post('/store',[MediumOfInstructionController::class,'store'])->name('add');
        Route::get('/',[MediumOfInstructionController::class,'index'])->name('index');
        Route::get('/show/{id}',[MediumOfInstructionController::class,'show'])->name('show');
        Route::get('/edit/{id}',[MediumOfInstructionController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[MediumOfInstructionController::class,'update'])->name('update');
        Route::get('/status/{id}',[MediumOfInstructionController::class,'status'])->name('status');
     });
    /* ----------------- ----------medium of instruction type end  -------------------------*/

    /* ----------------- ---------- Langauge start  -------------------------*/
     Route::group(['prefix'=>'language/','middleware'=>[],'as'=>'language.'], function(){
        Route::get('/create',[LanguageController::class,'create'])->name('create');
        Route::post('/store',[LanguageController::class,'store'])->name('add');
        Route::get('/',[LanguageController::class,'index'])->name('index');
        Route::get('/show/{id}',[LanguageController::class,'show'])->name('show');
        Route::get('/edit/{id}',[LanguageController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[LanguageController::class,'update'])->name('update');
        Route::get('/status/{id}',[LanguageController::class,'status'])->name('status');
     });
    /* ----------------- ----------Langauge end  -------------------------*/

    /* ----------------- ---------- Education Level start  -------------------------*/
    Route::group(['prefix'=>'education-level/','middleware'=>[],'as'=>'education_level.'], function(){
        Route::get('/create',[EducationLevelController::class,'create'])->name('create');
        Route::post('/store',[EducationLevelController::class,'store'])->name('add');
        Route::get('/',[EducationLevelController::class,'index'])->name('index');
        Route::get('/show/{id}',[EducationLevelController::class,'show'])->name('show');
        Route::get('/edit/{id}',[EducationLevelController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[EducationLevelController::class,'update'])->name('update');
        Route::get('/status/{id}',[EducationLevelController::class,'status'])->name('status');
     });
    /* ----------------- ---------- Education Level end  -------------------------*/

     /* ----------------- ---------- Document Type start  -------------------------*/
     Route::group(['prefix'=>'document-type/','middleware'=>[],'as'=>'document_type.'], function(){
      Route::get('/create',[DocumentTypeController::class,'create'])->name('create');
      Route::post('/store',[DocumentTypeController::class,'store'])->name('add');
      Route::get('/',[DocumentTypeController::class,'index'])->name('index');
      Route::get('/show/{id}',[DocumentTypeController::class,'show'])->name('show');
      Route::get('/edit/{id}',[DocumentTypeController::class,'edit'])->name('edit');
      Route::post('/update/{id}',[DocumentTypeController::class,'update'])->name('update');
      Route::get('/status/{id}',[DocumentTypeController::class,'status'])->name('status');
   });
  /* ----------------- ---------- Document Type end  -------------------------*/

  
     /* ----------------- ---------- Asset Brand start  -------------------------*/
     Route::group(['prefix'=>'asset-brand/','middleware'=>[],'as'=>'asset_brand.'], function(){
      Route::get('/create',[AssetBrandController::class,'create'])->name('create');
      Route::post('/store',[AssetBrandController::class,'store'])->name('add');
      Route::get('/',[AssetBrandController::class,'index'])->name('index');
      Route::get('/show/{id}',[AssetBrandController::class,'show'])->name('show');
      Route::get('/edit/{id}',[AssetBrandController::class,'edit'])->name('edit');
      Route::post('/update/{id}',[AssetBrandController::class,'update'])->name('update');
      Route::get('/status/{id}',[AssetBrandController::class,'status'])->name('status');
   });
  /* ----------------- ----------  Asset Brand end  -------------------------*/

  /* ----------------- ---------- Asset Type  start  -------------------------*/
  Route::group(['prefix'=>'asset-type/','middleware'=>[],'as'=>'asset_type.'], function(){
   Route::get('/create',[AssetTypeController::class,'create'])->name('create');
   Route::post('/store',[AssetTypeController::class,'store'])->name('add');
   Route::get('/',[AssetTypeController::class,'index'])->name('index');
   Route::get('/show/{id}',[AssetTypeController::class,'show'])->name('show');
   Route::get('/edit/{id}',[AssetTypeController::class,'edit'])->name('edit');
   Route::post('/update/{id}',[AssetTypeController::class,'update'])->name('update');
   Route::get('/status/{id}',[AssetTypeController::class,'status'])->name('status');
});
/* ----------------- ----------  Asset  Type end  -------------------------*/


 /* ----------------- ---------- Asset sub Type  start  -------------------------*/
 Route::group(['prefix'=>'asset-sub-type/','middleware'=>[],'as'=>'asset_sub_type.'], function(){
   Route::get('/create',[AssetSubTypeController::class,'create'])->name('create');
   Route::post('/store',[AssetSubTypeController::class,'store'])->name('add');
   Route::get('/',[AssetSubTypeController::class,'index'])->name('index');
   Route::get('/show/{id}',[AssetSubTypeController::class,'show'])->name('show');
   Route::get('/edit/{id}',[AssetSubTypeController::class,'edit'])->name('edit');
   Route::post('/update/{id}',[AssetSubTypeController::class,'update'])->name('update');
   Route::get('/status/{id}',[AssetSubTypeController::class,'status'])->name('status');
});
/* ----------------- ----------  Asset sub  Type end  -------------------------*/

 /* ----------------- ---------- current-residence-type   start  -------------------------*/
 Route::group(['prefix'=>'current-residence-type/','middleware'=>[],'as'=>'current_residence_type.'], function(){
   Route::get('/create',[CurrentResidenceTypeController::class,'create'])->name('create');
   Route::post('/store',[CurrentResidenceTypeController::class,'store'])->name('add');
   Route::get('/',[CurrentResidenceTypeController::class,'index'])->name('index');
   Route::get('/show/{id}',[CurrentResidenceTypeController::class,'show'])->name('show');
   Route::get('/edit/{id}',[CurrentResidenceTypeController::class,'edit'])->name('edit');
   Route::post('/update/{id}',[CurrentResidenceTypeController::class,'update'])->name('update');
   Route::get('/status/{id}',[CurrentResidenceTypeController::class,'status'])->name('status');
});
/* ----------------- ----------  current-residence-type end  -------------------------*/

/* ----------------- ---------- mode of transportation   start  -------------------------*/
Route::group(['prefix'=>'mode-of-transportation/','middleware'=>[],'as'=>'mode_of_transportation.'], function(){
   Route::get('/create',[ModeOfTransportationController::class,'create'])->name('create');
   Route::post('/store',[ModeOfTransportationController::class,'store'])->name('add');
   Route::get('/',[ModeOfTransportationController::class,'index'])->name('index');
   Route::get('/show/{id}',[ModeOfTransportationController::class,'show'])->name('show');
   Route::get('/edit/{id}',[ModeOfTransportationController::class,'edit'])->name('edit');
   Route::post('/update/{id}',[ModeOfTransportationController::class,'update'])->name('update');
   Route::get('/status/{id}',[ModeOfTransportationController::class,'status'])->name('status');
});
/* ----------------- ----------  mode of transportation end  -------------------------*/

/* -----------------==---------- Leave Type  start--------------------------*/
Route::group(['prefix'=>'leave-type/','middleware'=>[],'as'=>'leave_type.'], function(){
   Route::get('/create',[LeaveTypeController::class,'create'])->name('create');
   Route::post('/store',[LeaveTypeController::class,'store'])->name('add');
   Route::get('/',[LeaveTypeController::class,'index'])->name('index');
   Route::get('/show/{id}',[LeaveTypeController::class,'show'])->name('show');
   Route::get('/edit/{id}',[LeaveTypeController::class,'edit'])->name('edit');
   Route::post('/update/{id}',[LeaveTypeController::class,'update'])->name('update');
   Route::get('/status/{id}',[LeaveTypeController::class,'status'])->name('status');
});
/* ------------------------------- Leave Type  end  ---------------------------*/

/* image upload practice start*/ 
Route::get('/image-upload',[ImageController::class,'create'])->name('image.create');
Route::post('/image-store',[ImageController::class,'store'])->name('image.store');
Route::get('/gallery',[ImageController::class,'gallery'])->name('gallery.create');
/* image upload practice end*/ 
});

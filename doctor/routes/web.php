<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\doctor_controller;
use App\Http\Controllers\companie_controller;
use App\Http\Controllers\healthmanager_controller;
use App\Http\Controllers\mr_controller;
use App\Http\Controllers\stockiest_controller;
use App\Http\Controllers\service_controller;
use App\Http\Controllers\patient_controller;
use App\Http\Controllers\drspecialitie_controller;
use App\Http\Controllers\state_controller;
use App\Http\Controllers\specialist_controller;
use App\Http\Controllers\contact_controller;
use App\Http\Controllers\medicine_controller;
use App\Http\Controllers\doc_fav_medicine_controller;



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
///////////////patientbhbjhbjb//hbjhbjhgjhb/jhkjhjk
Route::get('/', function () {
    return view('welcome');
});
//company panel

Route::get('/company-login', function (){return view('company.login');});
Route::get('/company-dashbord', function (){return view('company.index');});
Route::get('/company-divisions-manager', function (){return view('company.divisionsmanage');});
Route::get('/company-medicine-manager', function (){return view('company.medicine-manager');});
Route::get('/company-doctor', function (){return view('company.doctor-list');});
Route::get('/company-manager', function (){return view('company.manager');});
Route::get('/company-add-manager', function (){return view('company.add-manager');});
Route::get('/company-mr', function (){return view('company.mr');});
Route::get('/company-add-mr', function (){return view('company.add-mr');});
Route::get('/company-add-stockiest', function (){return view('company.add-stockiest');});
Route::get('/company-stockiest', function (){return view('company.stockiest');});
//

// before patient login middleware
Route::group(['middleware'=>['beforepatient']], function(){

    
    Route::get('/login', function (){return view('patient.login');});
    Route::get('/register',[patient_controller::class,'create']);
    Route::post('/register',[patient_controller::class,'store']);
    Route::post('/patientlogin',[patient_controller::class,'patientlogin']);
    //Route::get('/forgot-password', function (){return view('patient.forgot-password');});
     //Route::get('/send-otp', function (){return view('patient.sendotp');});
     //Route::get('/confirm-password', function (){return view('patient.confirmpwd');});
    Route::get('/forgotpwd',[patient_controller::class,'forgotpwd']);
   
    Route::get('/sendotp',[patient_controller::class,'sendotp']);
    
    Route::get('/confirm-password',[patient_controller::class,'confirmpwd']);

   
    

});

Route::get('/patientlogout',[patient_controller::class,'patientlogout']);
// after patient login middleware
Route::group(['middleware'=>['afterpatient']], function(){


//Route::get('/profile', function (){return view('patient.profile');});
Route::get('/editpatient',[patient_controller::class,'editpatient']);
Route::post('/editpatient/{id}',[patient_controller::class,'updatepatient']);

//doctor search

//Route::get('/doctorsearch', function (){return view('patient.doctorsearch');});
Route::get('/doctorsearch',[doctor_controller::class,'doctorlist']);


//all doctor profile
//Route::get('/doctor-profile', function (){return view('patient.doctor-profile');});
Route::get('/doctorprofile/{id}',[doctor_controller::class,'doctorprofile']);

//Route::get('/', function (){return view('patient.index');});
Route::get('/index', function (){return view('patient.index');});
Route::get('/about', function (){return view('patient.about');});


//contact page and store
//Route::get('/contact', function (){return view('patient.contact');});
Route::get('/contact',[contact_controller::class,'create']);
Route::post('/contact',[contact_controller::class,'store']);
//




Route::get('/patient-dashboard', function (){return view('patient.patient-dashboard');});
//reset password
//Route::get('/Reset-password', function (){return view('patient.resetpwd');});
Route::get('/Reset-password',[patient_controller::class,'resetcreate']);
Route::post('/Reset-password',[patient_controller::class,'resetpassword']);
//
Route::get('/favourites', function (){return view('patient.favourites');});




Route::get('/booking', function (){return view('patient.booking');});
Route::get('/checkout', function (){return view('patient.checkout');});
Route::get('/booking-success', function (){return view('patient.booking-success');});
Route::get('/prescription', function (){return view('patient.prescription');});
Route::get('/prescription-view', function (){return view('patient.prescription-view');});





Route::get('/change-password', function (){return view('patient.change-password');});




Route::get('/chat', function (){return view('patient.chat');});
Route::get('/voice-call', function (){return view('patient.voice-call');});
Route::get('/video-call', function (){return view('patient.video-call');});

Route::get('reviews', function (){return view('patient.reviews');});
Route::get('calendar', function (){return view('patient.calendar');});
Route::get('components', function (){return view('patient.components');});

    
    

    
});




//===========================================================================================================

//before login middleware

Route::group(['middleware'=>['doctorbeforelogin']], function(){

        Route::get('/doctor',[doctor_controller::class,'doctorlogin']);
        Route::post('/adddoctorlogin',[doctor_controller::class,'adddoctorlogin']);
        Route::get('/doctor-forgot-password', function (){return view('doctor.forgot-password');});
        Route::get('/doctor-contact', function (){return view('doctor.contact');});

});
Route::get('/doctorlogout',[doctor_controller::class,'doctorlogout']);
// afterdoctor miidleware
Route::group(['middleware'=>['doctorafterlogin']], function(){

        
        Route::get('/editdoctor',[doctor_controller::class,'editdoctor']);
        Route::post('/editdoctor/{id}',[doctor_controller::class,'updatedoctor']);   

    //add service
        Route::get('/doctor-service-specialization',[service_controller::class,'create']);
        Route::post('/addservice',[service_controller::class,'addservice']);
        Route::post('/adddrspecialist',[service_controller::class,'adddrspecialist']);
        Route::get('/doctor-service-specialization',[service_controller::class,'index']);
        Route::get('/addservice/{id}',[service_controller::class,'destroyservices']);
        Route::get('/adddrspecialist/{id}',[service_controller::class,'destroyspcialist']);
        
     //medicine  
    // Route::get('/doctor-my-medicine', function (){return view('doctor.my-medicine');}); 
    Route::get('/doctor-my-medicine',[doc_fav_medicine_controller::class,'create']);
    Route::post('/addmedicinelist',[doc_fav_medicine_controller::class,'addmedicinelist']);
    Route::post('/addmedicine',[doc_fav_medicine_controller::class,'addmedicine']);
    Route::get('/doctor-my-medicine/{id}',[doc_fav_medicine_controller::class,'destroy']);
    
       

        Route::get('/doctor-dashboard', function (){return view('doctor.doctor-dashboard');});
        
       // Route::get('/doctor-service-specialization', function (){return view('doctor.add-service-specialization');});
        //Route::get('/doctor-profile-settings', function (){return view('doctor.doctor-profile-settings');});
        Route::get('/change-password', function (){return view('doctor.change-password');});

        Route::get('/doctor-appointments', function (){return view('doctor.appointments');});
        Route::get('/patient-schedule-timings', function (){return view('doctor.schedule-timings');});
        Route::get('/doctor-my-patients', function (){return view('doctor.my-patients');});
        Route::get('/doctor-favourites', function (){return view('doctor.favourites');});
        Route::get('/doctor-patient-profile', function (){return view('doctor.patient-profile');});
        Route::get('/doctor-chat-doctor', function (){return view('doctor.chat-doctor');});
        Route::get('/doctor-invoices', function (){return view('doctor.invoices');});
        Route::get('/doctor-reviews', function (){return view('doctor.reviews');});
        Route::get('/doctor-calendar', function (){return view('doctor.calendar');});
        Route::get('/doctor-components', function (){return view('doctor.components');});
        Route::get('/doctor-invoice-view', function (){return view('doctor.invoice-view');});
        Route::get('/doctor-blank-page', function (){return view('doctor.blank-page');});
        

});

//===========================================================================================================


//admin login and admin profile
Route::get('/admin-login',[admin_controller::class,'adminlogin']);
Route::post('/addlogin',[admin_controller::class,'addlogin']);
Route::get('/logout',[admin_controller::class,'logout']);
Route::get('/admin-profile',[admin_controller::class,'profile']);
Route::get('/editadmin/{id}',[admin_controller::class,'editadmin']);
Route::post('/admin-profile/{id}',[admin_controller::class,'update']);
//


Route::group(['middleware'=>['afterlogin']], function(){

   
Route::get('/admin', function (){return view('admin.index');});

Route::get('/admin-settings', function (){return view('admin.settings');});


//patient list admin side view
Route::get('/admin-patient',[patient_controller::class,'index']);
Route::get('/register/{id}',[patient_controller::class,'destroy']);
//Route::get('/admin-patient', function (){return view('admin.patientlist');});
//

Route::get('/admin-patient-appointment', function (){return view('admin.patient-appointment');});
Route::get('/admin-patient-cancel-appointment', function (){return view('admin.patient-cancel-appointment');});


Route::get('/admin-edit-doctor', function (){return view('admin.edit-doctor');});

//specilities
//Route::get('/admin-add-specialities', function (){return view('admin.add-specilities');});
//Route::get('/admin-specialities', function (){return view('admin.specialities');});
//Route::get('/admin-editspecialist', function (){return view('admin.editspecialist');});
Route::get('/admin-add-specialities',[specialist_controller::class,'create']);
Route::post('/admin-add-specialities',[specialist_controller::class,'store']);
Route::get('/admin-specialities',[specialist_controller::class,'index']);
Route::get('/admin-add-specialities/{id}',[specialist_controller::class,'destroy']);
Route::get('/editspecialist/{id}',[specialist_controller::class,'editspecialist']);
Route::post('/editspecialist/{id}',[specialist_controller::class,'update']);

//

//location
Route::get('/admin-location',[state_controller::class,'create']);
//Route::get('/admin-location',[state_controller::class,'index']);
Route::post('/addstate',[state_controller::class,'addstate']);
Route::post('/addcity',[state_controller::class,'addcity']);
Route::post('/addarea',[state_controller::class,'addarea']);
Route::get('/addstate/{id}',[state_controller::class,'destroystate']);
Route::get('/addcity/{id}',[state_controller::class,'destroycity']);
Route::get('/addarea/{id}',[state_controller::class,'destroyarea']);

//

//contact manage
//Route::get('/contacts', function (){return view('admin.managecontact');});
Route::get('/contacts',[contact_controller::class,'index']);
Route::get('/contact/{id}',[contact_controller::class,'destroy']);
//


//doctor
Route::get('/admin-add-doctor',[doctor_controller::class,'create']);//show doctor form
Route::post('/admin-add-doctor',[doctor_controller::class,'store']);//add doctor form
Route::get('/admin-doctor',[doctor_controller::class,'index']); //managedoctore
Route::get('/admin-add-doctor/{id}',[doctor_controller::class,'destroy']);//delte code
Route::get('/edit/{id}',[doctor_controller::class,'edit']);//edit nu page show  code
Route::post('/edit/{id}',[doctor_controller::class,'update']);//edit nu page show than after change karine upate karva
//

//company
Route::get('/admin-add-company',[companie_controller::class,'create']);//show doctor form
Route::post('/admin-add-company',[companie_controller::class,'store']);
Route::get('/admin-company',[companie_controller::class,'index']);
Route::get('/admin-add-company/{id}',[companie_controller::class,'destroy']);
Route::get('/editcompany/{id}',[companie_controller::class,'editcompany']);
Route::post('/editcompany/{id}',[companie_controller::class,'update']);
//

//health manager

Route::get('/admin-add-manager',[healthmanager_controller::class,'create']);
Route::post('/admin-add-manager',[healthmanager_controller::class,'store']);
Route::get('/admin-manager',[healthmanager_controller::class,'index']);
Route::get('/admin-add-manager/{id}',[healthmanager_controller::class,'destroy']);
Route::get('/editmanager/{id}',[healthmanager_controller::class,'editmanager']);
Route::post('/editmanager/{id}',[healthmanager_controller::class,'update']);

//

//MR
Route::get('/admin-add-mr',[mr_controller::class,'create']);
Route::post('/admin-add-mr',[mr_controller::class,'store']);
Route::get('/admin-mr',[mr_controller::class,'index']);
Route::get('/admin-add-mr/{id}',[mr_controller::class,'destroy']);
Route::get('/editmr/{id}',[mr_controller::class,'editmr']);
Route::post('/editmr/{id}',[mr_controller::class,'update']);
//

//stockiest
    
Route::get('/admin-stockiest',[stockiest_controller::class,'index']);

//



Route::get('/admin-doctor-appointment', function (){return view('admin.doctor-appointment');});
Route::get('/admin-doctor-cancel-appointment', function (){return view('admin.doctor-cancel-appointment');});


Route::get('/admin-edit-company', function (){return view('admin.edit-company');});
Route::get('/admin-company-appointment', function (){return view('admin.company-appointment');});
Route::get('/admin-company-cancel-appointment', function (){return view('admin.company-cancel-appointment');});




Route::get('/admin-manager-appointment', function (){return view('admin.manager-appointment');});
Route::get('/admin-manager-cancel-appointment', function (){return view('admin.manager-cancel-appointment');});


Route::get('/admin-edit-mr', function (){return view('admin.edit-mr');});


Route::get('/admin-mr-appointment', function (){return view('admin.mr-appointment');});
Route::get('/admin-mr-cancel-appointment', function (){return view('admin.mr-cancel-appointment');});


Route::get('/admin-reviews', function (){return view('admin.reviews');});
Route::get('/admin-transactions-list', function (){return view('admin.transactions-list');});
Route::get('/admin-invoice-report', function (){return view('admin.invoice-report');});
Route::get('/admin-forgot-password', function (){return view('admin.forgot-password');});
Route::get('/admin-lock-screen', function (){return view('admin.lock-screen');});
Route::get('/admin-error-404', function (){return view('admin.error-404');});
Route::get('/admin-error-500', function (){return view('admin.error-500');});
Route::get('/admin-blank-page', function (){return view('admin.blank-page');});
Route::get('/admin-components', function (){return view('admin.components');});

Route::get('/admin-form-basic-inputs', function (){return view('admin.form-basic-inputs');});
Route::get('/admin-form-input-groups', function (){return view('admin.form-input-groups');});

Route::get('/admin-form-vertical', function (){return view('admin.form-vertical');});
Route::get('/admin-form-validation', function (){return view('admin.form-validation');});
Route::get('/admin-tables-basic', function (){return view('admin.tables-basic');});
Route::get('/admin-data-tables', function (){return view('admin.data-tables');});
Route::get('/admin-form-horizontal', function (){return view('admin.form-horizontal');});

});

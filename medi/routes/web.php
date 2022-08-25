<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contact_controller;
use App\Http\Controllers\customer_controller;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\categorie_controller;
use App\Http\Controllers\product_controller;

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
//frontened

Route::get('/home', function () {
    return view('Frontend.medicare.home');
});


Route::get('/contact',[contact_controller::class,'create']);
Route::post('/contact',[contact_controller::class,'store']); // insert

Route::get('/customerregister',[customer_controller::class,'create'])->middleware('beforelogin'); 
Route::post('/customerregister',[customer_controller::class,'store']); // insert

Route::get('/myaccount',[customer_controller::class,'myaccount'])->middleware('afterlogin');
Route::get('/editcustomer/{id}',[customer_controller::class,'editcustomer'])->middleware('afterlogin');
Route::post('/editcustomer/{id}',[customer_controller::class,'update']);

Route::get('/login',[customer_controller::class,'login'])->middleware('beforelogin');
Route::post('/userlogin',[customer_controller::class,'userlogin']);
Route::get('/logout',[customer_controller::class,'logout']);





Route::get('/sign-in',function(){
	
	return view('Frontend.medicare.sign-in');
});

Route::get('/',function(){
	return view('Frontend.medicare.index8a95');
});


Route::get('/index8a95',function(){
	return view('Frontend.medicare.index8a95');
});

Route::get('/index6c11',function(){
	return view('Frontend.medicare.index6c11');
});
Route::get('/my-wishlist',function(){
	return view('Frontend.medicare.my-wishlist');
});


Route::get('/product-comparison',function(){
	return view('Frontend.medicare.product-comparison');
});


Route::get('/shopping-cart',function(){
	return view('Frontend.medicare.shopping-cart');
});





Route::get('/terms-conditions',function(){
	return view('Frontend.medicare.terms-conditions');
});


Route::get('/track-orders',function(){
	return view('Frontend.medicare.track-orders');
});


Route::get('/404',function(){
	return view('Frontend.medicare.404');
});


Route::get('/blog-details',function(){
	return view('Frontend.medicare.blog-details');
});


Route::get('/blog1',function(){
	return view('Frontend.medicare.blog1');
});

Route::get('/category',function(){
	return view('Frontend.medicare.category');
});

Route::get('/checkout',function(){
	return view('Frontend.medicare.checkout');
});



Route::get('/detail',function(){
	return view('Frontend.medicare.detail');
});

Route::get('/faq',function(){
	return view('Frontend.medicare.faq');
});

// backend



Route::get('/register',[admin_controller::class,'create']);
Route::post('/register',[admin_controller::class,'store']);


Route::get('/adminlogin',[admin_controller::class,'adminlogin']);
Route::post('/addmin',[admin_controller::class,'addmin']);
Route::get('/adminlogout',[admin_controller::class,'adminlogout']);

Route::get('/profile',[admin_controller::class,'profile']);
Route::get('/edit/{id}',[admin_controller::class,'edit']);
Route::post('/edit/{id}',[admin_controller::class,'update']);

Route::get('/addcategory',[categorie_controller::class,'create']);
Route::post('/addcategory',[categorie_controller::class,'store']);
Route::get('/addcategory/{id}',[categorie_controller::class,'destroy']); //delete
Route::get('/editcategory1/{id}',[categorie_controller::class,'editcategory1']); //edit
Route::post('/editcategory1/{id}',[categorie_controller::class,'update']); //update
Route::get('/managecategory',[categorie_controller::class,'index']); //managecaterypage view 



Route::get('/addproduct',[product_controller::class,'create']);
Route::post('/addproduct',[product_controller::class,'store']);
Route::get('/addproduct/{id}',[product_controller::class,'destroy']); //delete
Route::get('/editproduct1/{id}',[product_controller::class,'editproduct1']); //edit
Route::post('/editproduct1/{id}',[product_controller::class,'update']); //update
Route::get('/manageproduct',[product_controller::class,'index']); 






Route::get('/', function () {
	
    return view('Backend.Admin.index');
});


Route::get('/admin', function () {
    return view('Backend.Admin.index');
});

Route::get('/dashboard', function () {
    return view('Backend.Admin.index2');
});

Route::get('/changepassword', function () {
    return view('Backend.Admin.settingspage.change-password');
});

Route::get('/localization', function () {
    return view('Backend.Admin.settingspage.localization');
});

Route::get('/notificationssettings', function () {
    return view('Backend.Admin.settingspage.notifications-settings');
});

Route::get('/settings', function () {
    return view('Backend.Admin.settingspage.settings');
});

Route::get('/themesettings', function () {
    return view('Backend.Admin.settingspage.theme-settings');
});

Route::get('/inbox', function () {
    return view('Backend.Admin.inbox');
});

Route::get('/gallery', function () {
    return view('Backend.Admin.gallery');
});

Route::get('/formbasicinputs', function () {
    return view('Backend.Admin.form-basic-inputs');
});

Route::get('/forgotpassword', function () {
    return view('Backend.Admin.forgot-password');
});

Route::get('/error500', function () {
    return view('Backend.Admin.error-500');
});

Route::get('/error400', function () {
    return view('Backend.Admin.error-400');
});

Route::get('/editschedule', function () {
    return view('Backend.Admin.edit-schedule');
});

Route::get('/edit-profile', function () {
    return view('Backend.Admin.edit-profile');
});

Route::get('/editinvoice', function () {
    return view('Backend.Admin.edit-invoice');
});

Route::get('/editblog', function () {
    return view('Backend.Admin.edit-blog');
});

Route::get('/createinvoice', function () {
    return view('Backend.Admin.create-invoice');
});

Route::get('/compose', function () {
    return view('Backend.Admin.compose');
});

Route::get('/changepassword2', function () {
    return view('Backend.Admin.change-password2');
});

Route::get('/blogdetails', function () {
    return view('Backend.Admin.blog-details');
});

Route::get('/blog', function () {
    return view('Backend.Admin.blog');
});

Route::get('/blankpage', function () {
    return view('Backend.Admin.blank-page');
});

Route::get('/appointments', function () {
    return view('Backend.Admin.appointments');
});

Route::get('/addblog', function () {
    return view('Backend.Admin.add-blog');
});

Route::get('/addappointment', function () {
    return view('Backend.Admin.add-appointment');
});

Route::get('/tablesdatatables', function () {
    return view('Backend.Admin.tables-datatables');
});





Route::get('/payments', function () {
    return view('Backend.Admin.payments');
});

Route::get('/mailview', function () {
    return view('Backend.Admin.mail-view');
});



Route::get('/lockscreen', function () {
    return view('Backend.Admin.lock-screen');
});

Route::get('/invoiceview', function () {
    return view('Backend.Admin.invoice-view');
});

Route::get('/invoices', function () {
    return view('Backend.Admin.invoices');
});

Route::get('/employees', function () {
    return view('Backend.Admin.employees');
});

Route::get('/addemployee', function () {
    return view('Backend.Admin.add-employee');
});

Route::get('/editemployee', function () {
    return view('Backend.Admin.edit-employee');
});




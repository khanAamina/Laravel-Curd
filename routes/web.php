<?php

use  Illuminate\Support\Facades\Route;
use  App\Http\Controllers\registrationController;
use  App\Http\Controllers\LoginAuth;
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

// Route::get('/division-master' ,function(){
//     return view('index');
// });
 Route::get('/registration',[registrationController::class,'index']);
 Route::post('/registration',[registrationController::class,'store']);
 Route::get('/customer/view',[registrationController::class,'view']);
 Route::get('/customer/delete/{id}',[registrationController::class,'delete'])->name('customer.delete');
 Route::get('/customer/edit/{id}',[registrationController::class,'edit'])->name('customer.edit');
 Route::post('/customer/update/{id}',[registrationController::class,'update'])->name('customer.update');

 Route::get('/login',[LoginAuth::class,'index']);
 Route::post('/login',[LoginAuth::class,'userauth']);
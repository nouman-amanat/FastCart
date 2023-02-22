<?php

use App\Http\Controllers\add_Product;
use App\Http\Controllers\dbController;
use App\Http\Controllers\formController;
use App\Http\Controllers\middleware2Controller;
use App\Http\Controllers\middlewareController;
use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;

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
Route::get('navbar',function(){
    return view('navbar');
});
Route::view('link','/link');
Route::view('home','/home');
Route::get('product/{name}',[add_Product::class,'customer']);
// call a controller
Route::get("load",[viewController::class,'loadview']);
// form
Route::post("form",[formController::class,'getData']);
Route::view("login",'htmlForm');
// middleware
Route::get('middle',[middlewareController::class,'user' ]);
Route::get('access',[middleware2Controller::class,'nouman']);
// Route::get('database',[dbController::class,'getData']);



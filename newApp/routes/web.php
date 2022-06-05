<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\navbarcontroller;
use App\Http\Controllers\indexController;
use App\Http\Controllers\rohitController;
use App\Http\Controllers\hhcontroller;
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

Route::get('dashboard',[dashboardController::class,'dashboardView']);

//Index

Route::get('index',[indexController::class,'dashboard']);

//rohit
Route::get('hh',[rohitController::class,'index1']);

Route::get('aboutPage',[rohitController::class,'rohitClass']);

Route::get('product',[hhcontroller::class,'product']);


Route::get('productsses',[hhcontroller::class,'productsses']);








<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;

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

// Start insert operation

    //insert page view
    Route::get('insert',[indexController::class,'view']);

    // route for post operation 
    Route::post('/curd_post',[indexController::class,'curd_post']);

//end Insert Operation


//Start Display Operation

    //display page view
    Route::get('display',[indexController::class,'display']);

//End Display Operation


//Start Delete Operation

    // route for post operation 
    Route::get('/delete_curd/{id}',[indexController::class,'delete_curd']);

//End Delete Operation


//Start Edit/Update Operation

// route for view edit page 
Route::get('/edit_curd/{id}',[indexController::class,'edit_curd']);

// route for update editform 
Route::post('update_curd',[indexController::class,'update_curd']);




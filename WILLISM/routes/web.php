<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\willismController\indexController;

use App\Http\Controllers\adminDashboardController\adminController;

use App\Http\Controllers\adminDashboardController\testController;


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


///////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////// WILLISM //////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////


//index

Route::get('index',[indexController::class,'index']);

//about

Route::get('about',[indexController::class,'about']);

//work

Route::get('work',[indexController::class,'work']);

//blog

Route::get('blog',[indexController::class,'blog']);

//contact

Route::get('contact',[indexController::class,'contact']);

//rohit

Route::get('rohit',[indexController::class,'rohit']);


//test
Route::get('test',[testController::class,'test']);

//welocome
Route::get('welcomes',[testController::class,'welcomes']);





///////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////// ADMIIN //////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////

//index page view
Route::get('adminindex',[adminController::class,'admin']);

//Dashboard page view
Route::get('admindashboard',[adminController::class,'dashboard']);



/*****************************************************************************************************
 ***********************************CONTACT-US********************************************************
 *****************************************************************************************************/


// start  display Operation

    //Contactus page view
    Route::get('contactus',[adminController::class,'contactus']);

// End display Operation


// start Insert Operation

    // Addcontactus page view
    Route::get('addcontactus',[adminController::class,'addcontactus']);

    // route for post operation 
    Route::post('/contactus_post',[adminController::class,'contactus_post']);

// End Insert Operation


//Start Delete Operation

    Route::get('/delete_contactus/{id}',[adminController::class,'delete_contactus']);
   
//End Delete  Operation


//route for view edit page
   Route::get('/edit_contactus/{id}',[adminController::class,'edit_contactus']);

// route for update editform 
   Route::post('update_contactus',[adminController::class,'update_contactus']);   




/*****************************************************************************************************
 ***********************************ABOUT-US********************************************************
 *****************************************************************************************************/

 //aboutt-page view
 Route::get('aboutt',[adminController::class,'aboutt']);
 
//add-aboutt view
Route::get('addaboutt',[adminController::class,'addaboutt']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




//perfect
Route::get('perfect',[StudentController::class,'perfect']);


//index
Route::get('index',[StudentController::class,'index']);

//route of post-method validation
Route::post('index',[StudentController::class,'store']);	

//route of display
Route::get('fetch-Students',[StudentController::class,'fetchstudent']);

//route of display
Route::get('index',[StudentController::class,'indexs']);


//End_Delete data in db2_tables(connection)
  Route::delete('delete-student/{id}',[StudentController::class, 'destroy']);

//End_Delete data in table


//Start-update page
  Route::get('edit-student/{id}',[StudentController::class,'edit']);

  Route::post('update-student/{id}',[StudentController::class,'update']);


//End-update page








// //login
// Route::get('login',[StudentController::class,'login']);

//Register
 // Route::get('register',[StudentController::class,'register']);


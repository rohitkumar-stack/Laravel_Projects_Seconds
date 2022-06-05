<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
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

//form route
Route::get('form',[ProductController::class,'form']);


//insert  employee

//Employee view
Route::get('employee',[ProductController::class,'employee']);

//route of post method
Route::post('/employee_post',[ProductController::class,'employee_post']);



//delete 
 Route::delete('delete_employee/{id}', 'ProductController@destroy')->name('employee.destroy');



// Statrt-Update post method
	   //edit view
	   // Route::get('edit_employee/{id}',[EmployeeController::class,'edit_employee']);

	   // //update view
	   // Route::post('update_employee',[EmployeeController::class,'update_employee']);

// End-Update post method	


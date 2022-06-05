<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class ProductController extends Controller
{

    //form view
    function form()
    {
        return view('form');
    }


    
 //Add_employee post_method in table 

    	// Statrt-Display post method

            //employee view
            function employee()
            {
                $post=employee::all();
                return view('employee',['post'=>$post]);
            }

       // End-Display post method


        //insert add post method
        function employee_post(Request $req)
        {
        	$post = new Employee();
        	$post->name= $req->name;
        	$post->email= $req->email;
        	$post->address= $req->address;
        	$post->phone= $req->phone;

        	$post-> save();
            return redirect('/employee');
        }
        //End insert post_method

 //End Add_employee post_method in table 


  //delete
   public function destroy($id){
   
    Employee::find($id)->delete();
  
    return response()->json([
       'success' => 'Record deleted successfully!'
    ]);
} 


//Start-Update post method

            // //edit view
            // function edit_employee($id)
            // { 
            //     $data=employee::find($id);
            //     return view('employee',['posts'=>$data]);
            // }

            // //update page
            // function update_employee(Request $req)
            // {

            //     //return $req->input();
            //     $update=employee::find($req->id);

            //     $update ->firstname= $req->firstname;
            //     $update ->lastname= $req->lastname;
            //     $update ->email= $req->email;
            //     $update ->phone= $req->phone;
            //     $update ->gender= $req->gender;
            //     action="/update_employee" method="POST"
            //     $update-> save();
            //     return redirect('/employee');

            // }

//End-Update post method    







}

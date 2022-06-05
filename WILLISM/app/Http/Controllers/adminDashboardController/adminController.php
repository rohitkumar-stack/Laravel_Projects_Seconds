<?php

namespace App\Http\Controllers\adminDashboardController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contactus;

class adminController extends Controller
{

    //indexpage view
    function admin()
    {
        return view('admin\index');
    }

    //Dashboard view
    function dashboard()
    {
        return view('admin\dashboard');
    }

 
 /*****************************************************************************************************
 ***********************************CONTACT-US********************************************************
 *****************************************************************************************************/
     

//Start DISPLAY Opeartion

    //contactus view
    function contactus()
    {
        $post = contactus::all();
        return view('admin\contactus',['post'=>$post]);
    }

//End DISPLAY Operation
    


//Start INSERT Opeartion

    //Addcontactus view
    function addcontactus()
    {
        return view('admin\addcontactus');
    }

     // for Addcontactus insert Post method
     function contactus_post(Request $req){

        $post= new contactus;
        $post -> name= $req -> name;
        $post -> phone= $req -> phone;
        $post -> email= $req -> email;
        $post -> massage= $req -> massage;

        $post -> save();

        return redirect('/contactus');
    }

//End INSERT Operation


//Start of Delete Page

 // for delete
   function delete_contactus($id){
    $data=contactus::find($id);
    $data->delete();
    return redirect('/contactus');
}      

 //End of Delete Page


 //Start of update page

     //For View edit page
      function edit_contactus($id)
      { 
          $data=contactus::find($id);
          return view('admin\editcontactus',['data'=>$data]);
      }

    //Start of Update page
        function update_contactus(Request $req )
        {
            // return $req->input();
            $update=contactus::find($req->id);
            
            $update -> name= $req -> name;
            $update -> phone= $req -> phone;
            $update -> email= $req -> email;
            $update -> massage= $req -> massage;

            $update-> save();
            return redirect('/contactus');

        }

    //End of Update page







 /*****************************************************************************************************
 *********************************** ABOUT-US ********************************************************
 *****************************************************************************************************/

 //About-view
   function aboutt()
   {
       return view('admin\aboutt');
   }


//Add-About-view
function addaboutt()
{
    return view('admin\addaboutt');
}


 

    
   
}

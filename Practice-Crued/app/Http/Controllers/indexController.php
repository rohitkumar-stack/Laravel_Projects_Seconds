<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cured;

class indexController extends Controller
{
    //Start of insert page

        // for view form page 
        function view()
        {
            return view('insert');
        }

        // for create 
        function curd_post(Request $req){

            $post= new cured;
            $post -> name= $req -> name;
            $post -> phone= $req -> phone;
            $post -> state= $req -> state;

            $post -> save();

            return redirect('/insert');
        }

    //end of insert page


    //Start of display page

        //for view page
        function display()
        {
            $post = cured::all();
            return view('display',['post'=>$post]);
        }

    //End of Display Page

    //Start of Delete Page

        // for delete
        function delete_curd($id){
            $data=cured::find($id);
            $data->delete();
            return redirect('display');
        }

    //End of Display Page


    //Start Edit/Update Operation

        //For view Edit page
        function edit_curd($id){
            $data=cured::find($id);
            // $data->delete();
            return view('edit',['data'=>$data]);
        }

        // update page 

        function update_curd(Request $req)
        {
            // return $req->input();
            $update=cured::find($req->id);
            
            $update -> name= $req -> name;
            $update -> phone= $req -> phone;
            $update -> state= $req -> state;

            $update-> save();
            return redirect('display');

        }
   



}

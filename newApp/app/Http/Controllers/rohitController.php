<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productss;
class rohitController extends Controller

{


    function index1()
    {
        return view('hh');
    }

    function rohitClass()
    {
        return view('about');
    }

    //table
    function dashboard(){
        $data = Productss::all();
          return view('product',['product'=>$data]);
    }
}

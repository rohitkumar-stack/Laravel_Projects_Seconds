<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    function dashboard(){
        $data =['ram','shyam','nandan'];
        return view('home',['user'=>$data]);
    }

    function elseifView(){
        return view('elseif',['user'=>'ram']);
    }
}

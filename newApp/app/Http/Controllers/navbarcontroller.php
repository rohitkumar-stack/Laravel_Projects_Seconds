<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navbarcontroller extends Controller
{
    function dashboard(){
        return view('dashboard/navbar');
    }

}

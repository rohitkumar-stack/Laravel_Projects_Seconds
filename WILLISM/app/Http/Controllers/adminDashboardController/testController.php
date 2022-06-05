<?php

namespace App\Http\Controllers\adminDashboardController;

use App\Http\Controllers\Controller;
use App\Models\User;

class testController extends Controller
{
    function test()
    {
        return view('willism/test');
    }
   
    function welcomes()
    {
        return view('willism/welcomes');
    }
   
   

  
}
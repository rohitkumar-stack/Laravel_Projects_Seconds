<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //idex
    public function index()
    {
        return view('Dashboard.index');
    }

     //model
     public function student()
     {
         return view('Dashboard.student');
     }
}

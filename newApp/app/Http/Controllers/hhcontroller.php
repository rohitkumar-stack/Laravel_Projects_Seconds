<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productsses;

class hhcontroller extends Controller
{
    //cardController

   
    function runs()
    {
        return view('hh');
    }

    function productsses()
    {
        $names = productsses::all();
        return view('productsses',['product'=>$names]);
    }
}

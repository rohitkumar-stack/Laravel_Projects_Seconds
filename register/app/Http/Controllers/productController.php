<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\curd;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{

    
    //Products

    //Start of insert page

        // for view form page 
        function insert()
        {
            return view('insert');
        }



    //end of insert page
    

}

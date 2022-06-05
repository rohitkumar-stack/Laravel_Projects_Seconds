<?php

namespace App\Http\Controllers\willismController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //index

    function index()
    {
        return view('willism\index');
    }

      //about

      function about()
      {
          return view('willism\about');
      }

       //work

       function work()
       {
           return view('willism\work');
       }

       //blog

       function blog()
       {
           return view('willism\blog');
       }

        //contact

        function contact()
        {
            return view('willism\contact');
        }

        //rohit

        function rohit()
        {
            return view('willism\rohit');
        }
}

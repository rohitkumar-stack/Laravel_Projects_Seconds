<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class indexController extends Controller
{
    function dashboard(){
      $data = Product::all();
        return view('index',['product'=>$data]);
  }

}

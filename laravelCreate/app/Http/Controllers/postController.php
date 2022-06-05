<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class postController extends Controller
{
    function viewCreatePage(){
            return view('postView');
    }

    function postCreate(Request $req)
    {
        $post= new post;
        $post -> title= $req -> title;
        $post -> post= $req -> post;
        $post -> description= $req -> description;
        
        $post -> save();

        return redirect('/')->with('success', 'Deals created');
    }
}

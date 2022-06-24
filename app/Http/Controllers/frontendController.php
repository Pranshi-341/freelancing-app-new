<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    //
    function Essay(){
        return view('frontend.innerpage',['title'=>'Essay']);
    }
}

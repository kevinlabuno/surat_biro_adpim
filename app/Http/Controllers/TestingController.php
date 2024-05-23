<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index(){
   
        return view ('testing');
    }


    public function index2(){
        return view ('testing1');
    }
}

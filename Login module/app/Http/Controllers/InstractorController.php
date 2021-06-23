<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstractorController extends Controller
{
    public function index(){
        
           return view('instractor.index');
       
    }
    public function verify(){
        echo "posted";
    }
}

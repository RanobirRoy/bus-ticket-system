<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stepControlller extends Controller
{
    public function step1(){
        return view('frontend.stepPage1');
    }
    public function step2(){
        return view('frontend.stepPage2');
    }
}

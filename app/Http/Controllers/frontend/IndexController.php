<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function aboutUs(){
        return view('frontend.aboutus');
    }


    public function certificate(){
        return view('frontend.certificate');
    }

    public function contactus(){
        return view('frontend.contactus');
    }

    public function account(){
        return view('frontend.account');
    }

    

    
}

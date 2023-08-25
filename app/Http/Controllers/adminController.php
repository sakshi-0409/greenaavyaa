<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function billing(){
        return view('pages/billing');
    }
    public function admin_dashboard(){
        return view('pages/dashboard');
    }
    public function admin_profile(){
        return view('pages/profile-static');
    }
    public function rtl(){
        return view('pages/rtl');
    }
    public function sign_in(){
        return view('pages/sign-in-static');
    }
    public function sign_up(){
        return view('pages/sign-up-static');
    }
   
   
  
  

}


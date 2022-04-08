<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class HomeController extends Controller
{
    //
    
    //show home 
    public function showHome(){
     return  view('pages.index');
    }
    public function showlogin(){
        return view('pages.loginpage');
    }    public function showsignup(){
        return view('pages.signup');
    }    public function showservice(){
        return view('pages.service');
    }
    public function showprofile(){
        return view('pages.profile');
    }
    public function showjobs(){
        return view('pages.jobs');
    }
    public function showjobdetails(){
        return view('pages.jobdetails');
    }    public function showdashboard(){
        return view('pages.dashboard');
    }    public function showcontact(){
        return view('pages.contact');
    }    public function showcompanies(){
        return view('pages.companies');
    }    public function showaccount(){
        return view('pages.acount');
    }    public function showabout(){
        return view('pages.about');
    }
    public function dash(){
        return view('admin.layout.dash');
    }
  
}

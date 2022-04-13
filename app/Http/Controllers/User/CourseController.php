<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function Addcourse(){
        return view('users.course.addcourse');
    }
    public function ListAllCourse(){
        return view('users.course.listcourse');
    }
   
}

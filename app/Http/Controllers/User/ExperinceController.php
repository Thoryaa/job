<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExperinceController extends Controller
{
    //
    public function Addexp(){
        return view('users.experince.addexperince');
    }
    public function ListAllexp(){
        return view('users.experince.listaddexperince');
    }
}

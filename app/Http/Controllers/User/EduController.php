<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EduController extends Controller
{
    //
    public function Addedu(){
        return view('users.education.addedu');
    }
    public function ListAlledu(){
        return view('users.education.listedu');
    }
}

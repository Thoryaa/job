<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class personalController extends Controller
{
    //
    public function Addpersonalinfo(){
        return view('users.layout.addpersonalinfo');
    }
    public function ListAllpersonalinfo(){
        return view('users.layout.listpersonalinfo');
    }
    
}

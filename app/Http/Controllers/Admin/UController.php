<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UController extends Controller
{
    //


    //
    function AddUser(){ 
        return view('admin.users.adduser');;
    }
    // add data
    function sUser(Request $request){ 
print_r($request->input());
    }
    function ShowUser(){
        return view('admin.users.listuser');
    }
}

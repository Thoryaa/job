<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RooleController extends Controller
{
    //
    function AddRole(){ 
        return view('admin.role.addrole');
    }
    // add data
    function sRole(Request $request){ 
print_r($request->input());
    }
    function ShowRoles(){
        return view('admin.role.listrole');
    }
}

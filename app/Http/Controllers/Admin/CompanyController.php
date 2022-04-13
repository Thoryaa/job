<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    function AddCompany(){ 
        return view('admin.company.addcompany');
    }
    // add data
    function CreateCompany(Request $request){ 
print_r($request->input());
    }
    function ShowCompany(){
        return view('admin.company.listcompany');
    }
}

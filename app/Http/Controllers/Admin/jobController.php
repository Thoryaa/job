<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class jobController extends Controller
{
    //
    function AddJob(){ 
        return view('admin.job.addjob');
    }
    function ShowJobs(){
        return view('admin.job.listjob');
    }
}

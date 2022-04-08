<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //
    
    public function Addskills(){
        return view('users.layout.addskills');
    }
    public function ListAllSkills(){
        return view('users.layout.listskills');
    }
}

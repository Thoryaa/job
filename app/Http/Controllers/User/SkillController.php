<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //
    
    public function Addskills(){
        return view('users.skills.addskills');
    }
    public function ListAllSkills(){
        return view('users.skills.listskills');
    }
}

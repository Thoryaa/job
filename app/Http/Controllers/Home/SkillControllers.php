<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Models\Admin\skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SkillControllers extends Controller
{

      public function index(){
        $skills=skills::orderBy('id','desc')->get();
        return view('users.skills.list')
        ->with('skills',$skills) ;

    }
    public function create(){
        return view('users.skills.create');

    }
    public function edit($id){
        $skills=skills::find($id);
        return view('users.skills.edit')
        ->with('skills',$skills);

    }
    public function toggle($id){

       $skills=skills::find($id);
       $skills->is_active*=-1;
        /*if($ser->is_active==0)
       $skills->is_active=1;
        else 
       $skills->is_active=0;*/
        if($skills->save())
        return back()->with(['success'=>'data updated successful']);
        return back()->with(['error'=>'can not update data']);

    }
    public function store(Request $request){
        Validator::validate($request->all(),[
            'skills_name'=>['required','min:5','max:20'],
            //'desc'=>['required','min:5','max:60']


        ],[
            'skills_name.required'=>'this field is required',
            'skills_name.min'=>'can not be less than 5 letters', 
            'skills_name.max'=>'can not be greater than 20 letters', 
            // 'desc.required'=>'this field is required',
            // 'desc.min'=>'can not be less than 5 letters', 
            // 'desc.max'=>'can not be greater than 20 letters',

           
        ]);

        $new_skills=new skills();
        $new_skills->skills_name=$request->skills_name;
        $new_skills->percent=$request->percent;
        $new_skills->is_active=$request->is_active;
        if($new_skills->save())
        return redirect()->route('list_skills')->with(['success'=>'data inserted successful']);
        return redirect()->back()->with(['error'=>'can not add data ']);

        

    }
    public function update(Request $request,$id){
       $skills=skills::find($id);
       $skills->skills_name=$request->skills_name;
       $skills->percent=$request->percent;
       $skills->is_active=$request->is_active;
       
        if($skills->save())
        return redirect()->route('list_skills')->with(['success'=>'data updated successful']);
        return redirect()->back()->with(['error'=>'can not update data ']);



    }


    

    public function uploadFile($file){
        $dest=public_path()."/images/";

        //$file = $request->file('image');
        $filename= time()."_".$file->getClientOriginalName();
        $file->move($dest,$filename);
        return $filename;


    }
}

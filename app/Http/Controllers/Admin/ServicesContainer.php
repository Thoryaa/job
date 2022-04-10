<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServicesContainer extends Controller
{
    //
      //
      public function index(){
        $services=services::orderBy('id','desc')->get();
        return view('admin.services.list')
        ->with('services',$services) ;

    }
    public function create(){
        return view('admin.services.create');

    }
    public function edit($ser_id){
        $services=services::find($ser_id);
        return view('admin.services.edit')
        ->with('services',$services);

    }
    public function toggle($ser_id){

        $ser=services::find($ser_id);
        $ser->is_active*=-1;
        /*if($ser->is_active==0)
        $ser->is_active=1;
        else 
        $ser->is_active=0;*/
        if($ser->save())
        return back()->with(['success'=>'data updated successful']);
        return back()->with(['error'=>'can not update data']);

    }
    public function store(Request $request){
        Validator::validate($request->all(),[
            'ser_name'=>['required','min:5','max:20'],
            'desc'=>['required','min:5','max:60']


        ],[
            'ser_name.required'=>'this field is required',
            'ser_name.min'=>'can not be less than 5 letters', 
            'ser_name.max'=>'can not be greater than 20 letters', 
            'desc.required'=>'this field is required',
            'desc.min'=>'can not be less than 5 letters', 
            'desc.max'=>'can not be greater than 20 letters',

           
        ]);

        $new_ser=new services();
        $new_ser->ser_name=$request->ser_name;
        $new_ser->desc=$request->desc;
        $new_ser->is_active=$request->is_active;
        $new_ser->image=$request->hasFile('image')?$this->uploadFile($request->file('image')):"default_services.png";
        if($new_ser->save())
        return redirect()->route('list')->with(['success'=>'data inserted successful']);
        return redirect()->back()->with(['error'=>'can not add data ']);

        

    }
    public function update(Request $request,$ser_id){
        $ser=services::find($ser_id);
        $ser->ser_name=$request->ser_name;
        $ser->desc=$request->desc;
        $ser->is_active=$request->is_active;
        if($request->hasFile('image'))
        $ser->image=$this->uploadFile($request->file('image'));
        if($ser->save())
        return redirect()->route('list')->with(['success'=>'data updated successful']);
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

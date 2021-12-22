<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Etask;
use Illuminate\Http\Request;

class EtaskController extends Controller
{
    public function etasklist(){
        $etask = Etask::all();
        // dd($etask);
        return view('admin.layouts.etask_list',compact('etask'));
    }
    public function etaskform(){
        return view('admin.layouts.etask_form');
    }
    public function add(Request $request){
        // dd($request->all());
        $request->validate([
            'employee_nid'=>'required',
            'employee_name'=>'required',
            'user_nid'=>'required',
            'user_name'=>'required',
            'problem_area'=>'required',
            'work_type'=>'required',
            'feedback'=>'required',
            'image'=>'required',

        ]);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = (date('Ymdhms')).'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        // dd("ok");
       
        
        

        etask::create([
            'employee_nid'=>$request->employee_nid,
            'employee_name'=>$request->employee_name,
            'user_nid'=>$request->user_nid,
            'user_name'=>$request->user_name,
            'problem_area'=>$request->problem_area,
            'work_type'=>$request->work_type,
            'feedback'=>$request->feedback,
            'image'=>$filename,


        ]);
        
        return redirect()->route('admin.etask.list');
    }

    public function etaskDetails($employee_nid)
    {

        $etask=Etask::where('employee_nid',$employee_nid)->first();
    
        return view('admin.layouts.etask_details',compact('etask'));
    }

    public function etaskdelete($id)
    {

        $cc = Etask::find($id);
        $cc->delete();
       return redirect()->back()->with('success','employee of feedback Deleted.');
    }
    


}

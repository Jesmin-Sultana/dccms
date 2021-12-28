<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Etask;

use Illuminate\Http\Request;

class ShowEtaskController extends Controller
{
    public function etaskw(){
        $etask = Etask::all();

        return view('website.website_pages.show_etask',compact('etask'));
    }

    public function doetaskfeedback(Request $request){
        // dd($request->all());
        // $request->validate([
        //     'employee_nid'=>'required',
        //     'employee_name'=>'required',
        //     'user_nid'=>'required',
        //     'user_name'=>'required',
        //     'problem_area'=>'required',
        //     'work_type'=>'required',
        //     'feedback'=>'required',
        //     'image'=>'required',

        // ]);
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
        
        return redirect()->back()->with('msg','Thank You For Your Feedback');

    }

    
}

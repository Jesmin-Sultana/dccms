<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Etask;
use App\Models\Problem;
use Illuminate\Http\Request;

class ShowEtaskController extends Controller
{
    public function etaskw($id){
        $problem = Problem::find($id);
        return view('website.website_pages.show_etask',compact('problem'));
    }

    public function doetaskfeedback(Request $request){
        // dd($request->all());
        $request->validate([
        //     'employee_nid'=>'required',
        //     'employee_name'=>'required',
        //     'user_nid'=>'required',
        //     'user_name'=>'required',
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
       
        
        

       $etask = etask::create([
            'employee_name'=>$request->employee_name,
            'nid_number'=>auth()->user()->nid_number,


            'problem_area'=>$request->problem_area,
            'work_type'=>$request->work_type,
            'feedback'=>$request->feedback,
            'image'=>$filename,
        ]);

        $etask->employee->update([
            'status'=> 'available'
        ]);
        
        return redirect()->back()->with('msg','Thank You For Your Feedback');

    }

    
}

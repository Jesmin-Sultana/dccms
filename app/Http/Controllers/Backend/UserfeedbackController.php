<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Userfeedback;
use Illuminate\Http\Request;

class UserfeedbackController extends Controller
{
    public function userfeedbacklist(){
        $userfeedback = Userfeedback::all();
        // dd($userfeedback);
        return view('admin.layouts.userfeedback_list',compact('userfeedback'));
    }
    public function userfeedbackform(){
        return view('admin.layouts.userfeedback_form');
    }
    public function store(Request $request){

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = (date('Ymdhms')).'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        userfeedback::create([
            'user_name'=>$request->user_name,
            'user_nid'=>$request->user_nid,
            'problem_type'=>$request->problem_type,
            'feedback'=>$request->feedback,
            'image'=>$filename,





        ]);
        return redirect()->back();
    }

}

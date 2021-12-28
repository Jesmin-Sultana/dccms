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
        // dd($request-> all());

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = (date('Ymdhms')).'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        userfeedback::create([
            'user_name'=>$request->user_name,
            'user_nid'=>$request->user_nid,
            'problem_type'=>$request->problem_type,
            'area'=>$request->area,
            'feedback'=>$request->feedback,
            'image'=>$filename,





        ]);
        return redirect()->route('admin.user.feedback')->with('success','created successfully.');
    }

    public function userfeedbackDetails($user_nid)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $userfeedback=Userfeedback::where('user_nid',$user_nid)->first();
    
//      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.userfeedback_details',compact('userfeedback'));
    }

    public function userfeedbackdelete($id)
    {

        $cc = Userfeedback::find($id);
        $cc->delete();
       return redirect()->back()->with('success','userfeedback Deleted.');
    }
}





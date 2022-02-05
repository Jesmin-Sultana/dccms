<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Userfeedback;
use Illuminate\Http\Request;

class UserfeedbackController extends Controller
{
    public function userfeedbacklist(Request $request){

        $search = $request->query('search');
        if($search){
            $userfeedback = Userfeedback::where('name','Like', '%'.$search.'%')
                ->orWhere('nid_number','like','%'.$search.'%')->get();
            return view('admin.layouts.userfeedback_list',compact('userfeedback'));
        }
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
            'name'=>$request->name,
            'nid_number'=>$request->nid_number,
            'problem_type'=>$request->problem_type,
            'area'=>$request->area,
            'feedback'=>$request->feedback,
            'image'=>$filename,





        ]);
        return redirect()->route('admin.user.feedback')->with('success','created successfully.');
    }

    public function userfeedbackDetails($id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $userfeedback=Userfeedback::where('id',$id)->first();
    
//      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.userfeedback_details',compact('userfeedback'));
    }


    public function userfeedbackedit($id)
    {

        $userfeedback=Userfeedback::find($id);
//        $product=Product::where('user_id',$id)->first();

//        dd($all_categories);
        return view('admin.layouts.userfeedback_edit',compact('userfeedback'));

    }


    public function userfeedbackupdate(Request $request,$id)
    {

        
        $userfeedback=Userfeedback::find($id);

//        Product::where('column','value')->udpate([
//            'column'=>'request form field name'
//        ]);

        $image_name=$userfeedback->image;
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




    public function userfeedbackdelete($id)
    {

        $cc = Userfeedback::find($id);
        $cc->delete();
       return redirect()->back()->with('success','userfeedback Deleted.');
    }
}





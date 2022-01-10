<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Etask;
use Illuminate\Http\Request;

class EtaskController extends Controller
{
    public function etasklist(Request $request){
        $search = $request->query('search');
        if($search){
            $etask = Etask::where('user_nid','Like', '%'.$search.'%')
                ->orWhere('employee_nid','like','%'.$search.'%')->get();
            return view('admin.layouts.etask_list',compact('etask'));
        }
       
        $etask = Etask::all();
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

    public function etaskDetails($id)
    {

        $etask=Etask::where('id',$id)->first();
    
        return view('admin.layouts.etask_details',compact('etask'));
    }

    public function etaskEdit($employee_nid)
    {

        $etask=Etask::find($employee_nid);
//        $product=Product::where('user_id',$id)->first();

//        dd($all_categories);
        return view('admin.layouts.etask_edit',compact('etask'));

    }



    public function etaskupdate(Request $request,$id)
    {

        
        $etask=Etask::find($id);

//        Product::where('column','value')->udpate([
//            'column'=>'request form field name'
//        ]);

        $image_name=$etask->image;
              if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = (date('Ymdhms')).'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }

        $etask->update([
            'employee_nid'=>$request->employee_nid,
            'employee_name'=>$request->employee_name,
            'user_nid'=>$request->user_nid,
            'user_name'=>$request->user_name,
            'problem_area'=>$request->problem_area,
            'work_type'=>$request->work_type,
            'feedback'=>$request->feedback,
            'image'=>$filename,


        ]);
        return redirect()->route('admin.etask.list')->with('success','Feedback of Complation Task Updated Successfully.');

    }










    public function etaskdelete($id)
    {

        $cc = Etask::find($id);
        $cc->delete();
       return redirect()->back()->with('success','employee of feedback Deleted.');
    }


    


}

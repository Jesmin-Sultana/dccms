<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Typeproblem;
use Illuminate\Http\Request;

class TypeproblemController extends Controller
{
    public function typeform(){
        $typeproblems = Typeproblem::all();

        return view('admin.layouts.typeproblem_list',compact('typeproblems'));
    }
    public function typeprob(){
        return view('admin.layouts.typeproblem_form');
    }

    public function problemstore(Request $request){

        $request->validate([
            'problem_type'=>'required',
            'description'=>'required',
             
        
        ]);

        Typeproblem::create([
            'problem_type'=>$request->problem_type,
            'description'=>$request->description,
            
        ]);
        return redirect()->route('admin.problem.type');
    }


    public function typeproblemdetails($id)
    {

        $typeproblems = Typeproblem::where('id',$id)->first();
    
        return view('admin.layouts.typeproblem_details',compact('typeproblems'));
    }

    public function typeproblemdelete($id)
    {

        $cc = Typeproblem::find($id);
        $cc->delete();
       return redirect()->back()->with('success','Problems Type  Deleted.');
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Problem;
use App\Models\Employee;
use Illuminate\Http\Request;

class ProblemController extends Controller
{
    public function problemlist(Request $request){
        $search = $request->query('search');
        if($search){
            $problem = Problem::with('problemtype')->where('nid_number','Like', '%'.$search.'%')
                ->orWhere('name','like','%'.$search.'%')->get();
            return view('admin.layouts.problem_list',compact('problem'));
        }

        $problem = Problem::all();
        // dd($problem);
        return view('admin.layouts.problem_list',compact('problem'));
    }
    public function problemform(){
        return view('admin.layouts.problem_form');
    }
    public function store(Request $request){
        problem::create([
            'nid_number'=>$request->nid_number,
            'name'=>$request->name,
            'phone_number'=>$request->phone_number,
            'area'=>$request->area,
            'problem_type'=>$request->problem_type,
            'description_problem'=>$request->description_problem,
            'date'=>$request->date,
        ]);
        return redirect()->back();
    }

    public function probleminfoDetails($nid_number)
    {

        
      

      $problem=Problem::where('nid_number',$nid_number)->first();
        // dd($problem);
      $employee=Employee::where('working_field',$problem->problem_type)->get();
        // dd($employee);

    
        return view('admin.layouts.problem_details',compact('problem','employee'));
    }

    public function problemEdit($nid_number)
    {

        $problem=Problem::find($nid_number);
//        $product=Product::where('user_id',$id)->first();

//        dd($all_categories);
        return view('admin.layouts.problems_edit',compact('problem'));

    }

    public function problemupdate(Request $request,$id)
    {

        $problem=Problem::find($id);

        $problem->update([
            'nid_number'=>$request->nid_number,
            'name'=>$request->name,
            'phone_number'=>$request->phone_number,
            'area'=>$request->area,
            'problem_type'=>$request->problem_type,
            'description_problem'=>$request->description_problem,
            'date'=>$request->date,
        ]);
        return redirect()->route('admin.problems.list')->with('success','Objection Info Updated Successfully.');
    }


    public function probleminfoDelete($id)
    {

        $cc = Problem::find($id);
        $cc->delete();
       return redirect()->back()->with('success','objection info Deleted.');
    }

    // public function probleminfoDelete($id)
    // {
    //     Problem::find($id)->delete();
    //    return redirect()->back()->with('success','objection info Deleted.');
    // }


public function assignemployeeupdate(Request $request,$id)
{

    $problem=Problem::find($id);

    $problem->update([
        'employee_name'=>$request->employee_name,
        
    ]);
    return redirect()->route('admin.problems.list')->with('success','Objection Info Updated Successfully.');
}
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Typeproblem;
// use App\Models\Assigned;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employeelist(Request $request){


        $search = $request->query('search');
        if($search){
            $employee = Employee::where('nid_number','Like', '%'.$search.'%')
                ->orWhere('employee_name','like','%'.$search.'%')->get();
            return view('admin.layouts.employee_list',compact('employee'));
        }
        $employee = Employee::with('workingfield')->get();
        // dd($employee);


        return view('admin.layouts.employee_list',compact('employee'));
    }



    public function employeeform(){
        

        $working_field = Typeproblem::all();
        // dd($working_field);
        return view('admin.layouts.employee_form',compact('working_field'));
    }
   

    public function add(Request $request){
       
        $employee = employee::create([


            'employee_name'=>$request->employee_name,
            'nid_number'=>$request->nid_number,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'gender'=>$request->gender,
            'city'=>$request->city,
            'country'=>$request->country,
            'address'=>$request->address,


            'working_field'=>$request->working_field,

        ]);

        

        return redirect()->route('admin.employee');
    }


   
       


    public function employeeDetails($id)
    {

        $employee=Employee::where('id',$id)->first();
    
        return view('admin.layouts.employee_details',compact('employee'));
    }

    public function employeeEdit($id)
    {
        $working_field = Typeproblem::all();


        $employee=Employee::find($id);
//        $product=Product::where('user_id',$id)->first();

//        dd($all_categories);
        return view('admin.layouts.employee_edit',compact('employee','working_field'));

    }

    public function employeeupdate(Request $request,$id)
    {


        $employee=Employee::find($id);
        $employee->update([
            'employee_name'=>$request->employee_name,
            'nid_number'=>$request->nid_number,
            'address'=>$request->address,
            'phone_number'=>$request->phone_number,
            'gender'=>$request->gender,
            'working_field'=>$request->working_field,

        ]);
        return redirect()->route('admin.employee')->with('success','Objection Info Updated Successfully.');;
    }



    public function employeedelete($id)
    {

        $cc = Employee::find($id);
        $cc->delete();
       return redirect()->back()->with('success','employee details Deleted.');
    }
}

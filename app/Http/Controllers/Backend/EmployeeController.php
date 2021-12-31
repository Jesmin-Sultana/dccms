<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employeelist(){
        $employee = Employee::all();
        // dd($employee);
        return view('admin.layouts.employee_list',compact('employee'));
    }

    public function employeeform(){
        return view('admin.layouts.employee_form');
    }
    public function add(Request $request){
        employee::create([
            'employee_name'=>$request->employee_name,
            'nid_number'=>$request->nid_number,
            'address'=>$request->address,
            'phone_number'=>$request->phone_number,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'working_field'=>$request->working_field,

        ]);
        return redirect()->route('admin.employee');
    }

    public function employeeDetails($nid_number)
    {

        $employee=Employee::where('nid_number',$nid_number)->first();
    
        return view('admin.layouts.employee_details',compact('employee'));
    }

    public function employeeEdit($nid_number)
    {

        $employee=Employee::find($nid_number);
//        $product=Product::where('user_id',$id)->first();

//        dd($all_categories);
        return view('admin.layouts.employee_edit',compact('employee'));

    }

    public function employeeupdate(Request $request,$id)
    {

        $employee=Employee::find($id);
        $employee->update([
            'employee_name'=>$request->employee_name,
            'nid_number'=>$request->nid_number,
            'address'=>$request->address,
            'phone_number'=>$request->phone_number,
            'age'=>$request->age,
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

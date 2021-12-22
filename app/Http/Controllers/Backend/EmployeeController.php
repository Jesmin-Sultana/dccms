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
            'name'=>$request->name,
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

    public function employeedelete($id)
    {

        $cc = Employee::find($id);
        $cc->delete();
       return redirect()->back()->with('success','employee details Deleted.');
    }
}

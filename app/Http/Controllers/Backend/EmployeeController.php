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
        return redirect()->back();
    }
}

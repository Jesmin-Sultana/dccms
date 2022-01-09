<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Assigned;
use App\Models\Problem;

use Illuminate\Http\Request;

class AssignemployeeController extends Controller
{
    public function assignform(){
        // $data=Assigned ::all();


        $data=Problem::with('employee')->where('employee_name','!=','null')->get();
        // dd($data);
        return view('admin.layouts.assignemployee_list',compact('data'));

    }

//     public function assignstatus(){
// return redirect()->back();
//     }

}

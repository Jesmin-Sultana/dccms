<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Etask;
use Illuminate\Http\Request;

class EtaskController extends Controller
{
    public function etasklist(){
        $etask = Etask::all();
        // dd($etask);
        return view('admin.layouts.etask_list',compact('etask'));
    }
    public function etaskform(){
        return view('admin.layouts.etask_form');
    }
    public function add(Request $request){

        $request->validate([
            'employee_nid'=>'required',
            'employee_name'=>'required',
            'user_nid'=>'required',
            'user_name'=>'required',
            'problem_area'=>'required',
            'work_type'=>'required',
            'feedback'=>'required',

        ]);
        etask::create([
            'employee_nid'=>$request->employee_nid,
            'employee_name'=>$request->employee_name,
            'user_nid'=>$request->user_nid,
            'user_name'=>$request->user_name,
            'problem_area'=>$request->problem_area,
            'work_type'=>$request->work_type,
            'feedback'=>$request->feedback,

        ]);
        return redirect()->back();
    }
}
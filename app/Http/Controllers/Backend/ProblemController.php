<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Problem;
use Illuminate\Http\Request;

class ProblemController extends Controller
{
    public function problemlist(){
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
            'description_problem'=>$request->description_problem,
            'date'=>$request->date,
        ]);
        return redirect()->back();
    }
}

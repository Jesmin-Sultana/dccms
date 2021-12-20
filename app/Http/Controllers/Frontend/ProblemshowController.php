<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Problem;

use Illuminate\Http\Request;

class ProblemshowController extends Controller
{
    public function websiteproblem(){
        $problem = Problem::all();
        return view('website.website_pages.show_cityproblem',compact('problem'));
    }

    public function doshowproblem(Request $request){
        
        problem::create([
            'nid_number'=>$request->nid_number,
            'name'=>$request->name,
            'phone_number'=>$request->phone_number,
            'area'=>$request->area,
            'problem_type'=>$request->problem_type,
            'description_problem'=>$request->description_problem,
            'date'=>$request->date,
        ]);
        return redirect()->back()->with('msg','Thank You');
    }
}
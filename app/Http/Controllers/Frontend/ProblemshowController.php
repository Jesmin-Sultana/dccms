<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Problem;
use App\Models\User;

use App\Models\Typeproblem;

use Illuminate\Http\Request;

class ProblemshowController extends Controller
{
    public function websiteproblem(){

// dd($problem);
        $problem=User::all();

        $problem = Problem::all();
        $problem_type = Typeproblem::all();
// dd($problem_type);
        return view('website.website_pages.show_cityproblem',compact('problem','problem_type'));
    }

    public function doshowproblem(Request $request){

        $request->validate([
            'area'=>'required',
            'problem_type'=>'required',
            'date'=>'required',
             
        
        ]);

        //dd($request->all());
        problem::create([
            'nid_number'=>auth()->user()->nid_number,
            'name'=>auth()->user()->name,
            'phone_number'=>auth()->user()->phone_number,
            'area'=>$request->area,
            'problem_type'=>$request->problem_type,
            // 'description_problem'=>$request->description_problem,
            'date'=>$request->date,
        ]);
        return redirect()->back()->with('msg','Thank You For submitting Your Objection');
    }
}

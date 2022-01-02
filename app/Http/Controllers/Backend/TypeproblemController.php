<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Typeproblem;
use Illuminate\Http\Request;

class TypeproblemController extends Controller
{
    public function typeform(){
        $typeproblems = Typeproblem::all();

        return view('admin.layouts.typeproblem_list',compact('typeproblems'));
    }
    public function typeprob(){
        return view('admin.layouts.typeproblem_form');
    }

    public function problemstore(Request $request){
        Typeproblem::create([
            'problem_type'=>$request->problem_type,
            'description'=>$request->description,
            
        ]);
        return redirect()->route('admin.problem.type');
    }
}

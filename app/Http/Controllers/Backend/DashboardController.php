<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Problem;
use App\Models\Employee;
use App\Models\Typeproblem;
use App\Models\Userfeedback;
use App\Models\Etask;



use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){

        $count['employee']=Employee::all()->count();
        $count['typeproblems']=Typeproblem::all()->count();
        $count['problem']=Problem::all()->count();
        $count['problem']=Problem::all()->count();
        $count['userfeedback']=Userfeedback::all()->count();
        $count['etask']=Etask::all()->count();




        return view('admin.layouts.dashboard',compact('count'));
    }
}

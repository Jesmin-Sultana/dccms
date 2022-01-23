<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Problem;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reportlist(Request $request){
        // dd($request->all());
    

        
            $from = $request->query('from_date');
            $to = $request->query('to_date');
            $problem = [];
            if($from && $to){
                // dd('ok');

              $problem = Problem::whereBetween('date',[$from,$to])->get();
            //   dd($problem);
              return view('admin.layouts.report_list',compact('problem'));
            }
            return view('admin.layouts.report_list',compact('problem'));
    }



    public function reportform(){
        return view('admin.layouts.report_form');
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Problem;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reportlist(Request $request){

      $problem = [];
      if($request->has('from_date'))
      {
        $request->validate([
          'from_date' => 'required',
          'to_date' => 'required|date|after_or_equal:from_date',
      ]);

      $from = $request->query('from_date');
      $to = $request->query('to_date');

     
      if($from && $to){
        $problem = Problem::whereBetween('date',[$from,$to])->get();
        return view('admin.layouts.report_list',compact('problem'))->with('error','Please select a validate date');
      }
      return view('admin.layouts.report_list',compact('problem'))->with('error','Please select a validate date');
    }
    return view('admin.layouts.report_list',compact('problem'));
  }



    public function reportform(){
        return view('admin.layouts.report_form');
    }
}

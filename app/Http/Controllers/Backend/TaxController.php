<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function tax_list(){
        $tax = Tax::all();
        // dd($tax);
        return view('admin.layouts.tax',compact('tax'));
    }

    public function taxform(){
        return view('admin.layouts.tax_form');
    }
    public function store(Request $request){
        tax::create([
            'tin_number'=>$request->tin_number,
            'nid_number'=>$request->nid_number,
            'name'=>$request->name,
            'phone_number'=>$request->phone_number,
            'gender'=>$request->gender,
            'tax_amount'=>$request->tax_amount,
            'status'=>$request->status,
        ]);
        return redirect()->route('admin.tax');
    }

    public function taxDetails($tin_number)
    {

        $tax=Tax::where('tin_number',$tin_number)->first();
    
        return view('admin.layouts.tax_details',compact('tax'));
    }

    public function taxdelete($id)
    {

        $cc = Tax::find($id);
        $cc->delete();
       return redirect()->back()->with('success','tax Deleted.');
    }
}

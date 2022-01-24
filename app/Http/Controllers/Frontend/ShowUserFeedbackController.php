<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Userfeedback;
use App\Models\User;


use Illuminate\Http\Request;

class ShowUserFeedbackController extends Controller
{
    public function userfeedbackw(){

        
        $problem=User::all();



        $userfeedback = Userfeedback::all();


        return view('website.website_pages.show_userfeedback',compact('userfeedback'));
    }

    public function douserfeedback(Request $request){
        // dd($request->all());
        $filename = '';
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = (date('Ymdhms')).'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        userfeedback::create([
            'name'=>auth()->user()->name,
            'nid_number'=>auth()->user()->nid_number,
            'phone_number'=>auth()->user()->phone_number,
            'problem_type'=>$request->problem_type,
            'area'=>$request->area,
            'feedback'=>$request->feedback,
            'image'=>$filename,





        ]);
        return redirect()->back()->with('msg','Thank You For Your Feedback');

    }
}

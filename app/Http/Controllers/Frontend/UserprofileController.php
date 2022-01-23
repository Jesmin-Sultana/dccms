<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Problem;
use App\Models\Employee;
// use App\Models\Employee;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserprofileController extends Controller
{
    public function userprofilew(){

// profile with problem
        // dd(auth()->user());
        // $user_id = auth()->user()->id;
        // dd($user_id);
        // $employee = Employee::where('id',$user_id)->get();
        // dd($employee);
        $problem = Problem::all();

        return view('website.website_pages.user_profile',compact('problem'));
    }



    public function assignemployeeupdate(Request $request,$id)
{

    $problem=Problem::find($id);

    $problem->update([
        'employee_name'=>$request->employee_name,
        
    ]);
    return redirect()->route('admin.problems.list')->with('success','Objection Info Updated Successfully.');
}

public function userprofilewstore(Request $request,$id){

    // dd($request->all());
    $user=User::find($id);
    $user->update([
        // User::create([
            'name'=>$request->name,
            // 'last_name'=>$request->last_name,
            'nid_number'=>$request->nid_number,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'gender'=>$request->gender,
            'city'=>$request->city,
            'country'=>$request->country,
            'address'=>$request->address,
            'password'=>bcrypt($request->password),


        ]);
        return redirect()->route('website.user.profile');
        
    }


    public function showproblemview($id)
    {
        // dd($id);
        // dd(auth()->user());
      

      $problem=Problem::where('employee_name', auth()->user()->id)->first();
        // dd($problem);
        // if (!empty($problem)) {
        return view('website.website_pages.showproblem_details',compact('problem'));
            
        // } else {
            // return "404";
        // }
        




    }


}

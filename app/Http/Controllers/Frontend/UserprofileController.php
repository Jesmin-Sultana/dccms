<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserprofileController extends Controller
{
    public function userprofilew(){
        return view('website.website_pages.user_profile');
    }
    public function assignemployeeupdate(Request $request,$id)
{

    $problem=Problem::find($id);

    $problem->update([
        'employee_name'=>$request->employee_name,
        
    ]);
    return redirect()->route('admin.problems.list')->with('success','Objection Info Updated Successfully.');
}

public function userprofilewstore(Request $request){

    // dd($request->all());
        User::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
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

}

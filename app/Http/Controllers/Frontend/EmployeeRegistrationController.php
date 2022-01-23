<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;

class EmployeeRegistrationController extends Controller
{
    public function employeereg(){
        return view('website.website_pages.employee_registration');
    }


    public function doemployeeregistration(Request $request){

            User::create([
                'name'=>$request->name,
                // 'last_name'=>$request->last_name,
                'nid_number'=>$request->nid_number,
                'email'=>$request->email,
                'phone_number'=>$request->phone_number,
                'gender'=>$request->gender,
                'city'=>$request->city,
                'country'=>$request->country,
                'address'=>$request->address,
                'password'=>bcrypt( $request->password),
                'role'=>$request->employee_role,
    
    
            ]);
            return redirect()->route('user.login');
            
        }
}

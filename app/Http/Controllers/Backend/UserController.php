<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userlist(){
        $usertable = User::all();
        // dd($usertable);
        return view('admin.layouts.user_list',compact('usertable'));
    }

    public function userstore(){
        Usertable::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'nid_number'=>$request->nid_number,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'gender'=>$request->gender,
            'city'=>$request->city,
            'country'=>$request->country,
            'address'=>$request->address,
            // 'password'=>bcrypt( $request->password),


        ]);
        return redirect()->route('admin.user');
    }

    


    
   

}

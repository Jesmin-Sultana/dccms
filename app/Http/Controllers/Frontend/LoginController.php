<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function registrationform()
    {
        return view('website.website_pages.registration');
    }
    public function doregistration(Request $request){

        $request->validate([
            'name'=>'required',
            'nid_number'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'gender'=>'required',
            'city'=>'required',
            'country'=>'required',
            'address'=>'required',
            'password'=>'required',
        
        ]);







    //dd($request->all());
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


        ]);
        return redirect()->route('user.login');
        
    }

    public function loginform(){
        return view('website.website_pages.login');
    }

    public function dologin(Request $request){
        
        $userpost=$request->except('_token');

        //dd($request->all());
        //dd(Auth::attempt($userpost));
        if (Auth::attempt($userpost)) {
            return redirect()->route('website.home');
        }
        else
        return redirect()->route('user.login');

    }
    public function logout(){
      // dd("ok");
        Auth::logout();
        return redirect()->route('website.home');

    
}
}

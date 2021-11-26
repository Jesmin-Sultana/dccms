<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\UserTable;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userlist(){
        $usertable = UserTable::all();
        // dd($usertable);
        return view('admin.layouts.user_list',compact('usertable'));
    }
    public function userform(){
        return view('admin.layouts.user_form');
    }
    public function store(Request $request){
        usertable::create([
            'nid_number'=>$request->nid_number,
            'name'=>$request->name,
            'phone_number'=>$request->phone_number,
            'gender'=>$request->gender,
            'address'=>$request->address,
            'problem_type'=>$request->problem_type,
            'application_type'=>$request->application_type,
        ]);
        return redirect()->back();
    }

}

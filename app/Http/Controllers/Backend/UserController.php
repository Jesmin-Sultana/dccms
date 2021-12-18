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
    
   

}

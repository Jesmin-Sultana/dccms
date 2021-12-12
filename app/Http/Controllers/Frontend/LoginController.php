<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function registrationform()
    {
        return view('website.website_pages.registration');
    }
    public function doregistration(Request $request){
        
    }



    public function loginform(){
        return view('website.website_pages.login');
    }
}

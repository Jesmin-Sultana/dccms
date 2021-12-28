<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserprofileController extends Controller
{
    public function userprofilew(){
        return view('website.website_pages.user_profile');
    }
}

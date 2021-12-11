<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowUserController extends Controller
{
    public function websiteUser(){
        return view('website.website_pages.show_user');
    }
}

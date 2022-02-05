<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewPageController extends Controller
{
    public function electricity(){
        return view('website.website_pages.electricity');
    }

    public function water(){
        return view('website.website_pages.water');
    }

    public function street(){
        return view('website.website_pages.street');
    }

    public function mosquito(){
        return view('website.website_pages.mosquito');
    }

    public function waterlogging(){
        return view('website.website_pages.waterlogging');
    }

    public function garbage(){
        return view('website.website_pages.garbage');
    }

    public function gas(){
        return view('website.website_pages.gas');
    }

    public function sewage(){
        return view('website.website_pages.sewage');
    }
}

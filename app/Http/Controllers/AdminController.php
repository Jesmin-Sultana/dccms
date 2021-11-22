<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function project(){
        return view('admin.master');
    }
    public function adminpart(){
        return view('admin.layouts.admin');
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssignemployeeController extends Controller
{
    public function assignform(){
        return view('admin.layouts.assignemployee_list');

    }
}

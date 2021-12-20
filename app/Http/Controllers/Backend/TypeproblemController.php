<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeproblemController extends Controller
{
    public function typeform(){
        return view('admin.layouts.typeproblem_list');
    }
}

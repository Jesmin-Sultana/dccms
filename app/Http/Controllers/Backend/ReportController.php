<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reportlist(){
        return view('admin.layouts.report_list');
    }
    public function reportform(){
        return view('admin.layouts.report_form');
    }
}

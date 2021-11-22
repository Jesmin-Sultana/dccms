<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AdminController;
use App\Http\controllers\Backend\ProblemnameController;
use App\Http\controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\TaxController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/admin',[AdminController::class,'project']);

Route::get('/admin/problem_name',[ProblemnameController::class,'problemname'])->name('admin.problem_name');
Route::get('/admin/Dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');

Route::post('/problemname/store',[ProblemnameController::class,'store'])->name('problemname.store');
Route::get('/admin/admin',[AdminController::class,'adminpart'])->name('admin.adminpart');

Route::get('/admin/taxs',[TaxController::class,'tax_list'])->name('admin.tax');
Route::get('/admin/taxs/form',[TaxController::class,'taxform'])->name('admin.tax.form');
Route::post('/taxs/store',[TaxController::class,'store'])->name('tax.store');



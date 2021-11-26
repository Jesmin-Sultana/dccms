<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AdminController;
use App\Http\controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\TaxController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\UserController;

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


Route::get('/admin/Dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');


Route::get('/admin/admin',[AdminController::class,'adminpart'])->name('admin.adminpart');

// tax
Route::get('/admin/taxs',[TaxController::class,'tax_list'])->name('admin.tax');
Route::get('/admin/taxs/form',[TaxController::class,'taxform'])->name('admin.tax.form');
Route::post('/taxs/store',[TaxController::class,'store'])->name('tax.store');

// employee
Route::get('/admin/employee/list',[EmployeeController::class,'employeelist'])->name('admin.employee');
Route::get('/admin/employee/form',[EmployeeController::class,'employeeform'])->name('admin.employee.form');
Route::post('/employees/add',[EmployeeController::class,'add'])->name('employee.add');

// user
Route::get('/admin/user/list',[UserController::class,'userlist'])->name('admin.user');
Route::get('/admin/user/form',[UserController::class,'userform'])->name('user.form');
Route::post('/users/store',[UserController::class,'store'])->name('usertable.store');









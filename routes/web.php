<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AdminController;
use App\Http\controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\TaxController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProblemController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\EtaskController;
use App\Http\Controllers\Backend\UserfeedbackController;
use App\Http\Controllers\Frontend\WebsiteController;

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

// city corporation problems
Route::get('/admin/problem/list',[ProblemController::class,'problemlist'])->name('admin.problem.list');
Route::get('/admin/problem/form',[ProblemController::class,'problemform'])->name('problem.form');
Route::post('/problems/store',[ProblemController::class,'store'])->name('problem.store');

// report
Route::get('/admin/report/list',[ReportController::class,'reportlist'])->name('admin.report.list');
Route::get('/admin/report/form',[ReportController::class,'reportform'])->name('report.form');

// feedback of completion task
Route::get('/admin/etask/list',[EtaskController::class,'etasklist'])->name('admin.etask.list');
Route::get('/admin/etask/form',[EtaskController::class,'etaskform'])->name('etask.form');
Route::post('/etasks/add',[EtaskController::class,'add'])->name('etask.add');

// userfeedback
Route::get('/admin/userfeedback/list',[UserfeedbackController::class,'userfeedbacklist'])->name('admin.user.feedback');
Route::get('/admin/userfeedback/form',[UserfeedbackController::class,'userfeedbackform'])->name('user.feedback.form');
Route::post('/userfeedback/store',[UserfeedbackController::class,'store'])->name('userfeedback.store');

// website part
Route::get('/',[WebsiteController::class,'websitep'])->name('home');


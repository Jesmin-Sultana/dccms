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
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShowUserController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Backend\AdminloginController;

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
//     return view('website.pages.home');
// });

Route::group(['prefix'=>'admin'],function(){

// Admin Login
Route::get('/login',[AdminloginController::class,'login'])->name('admin.login');
Route::post('/login',[AdminloginController::class,'dologin'])->name('admin.do.login');


Route::group(['middleware'=>'auth'],function (){
    Route::get('/', function () {
        return view('admin.layouts.dashboard');
    })->name('admin.dashboard');

Route::get('/logout',[AdminloginController::class,'logout'])->name('admin.logout');




Route::get('/',[AdminController::class,'project']);


Route::get('/Dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');


Route::get('/',[AdminController::class,'adminpart'])->name('admin.adminpart');

// tax
Route::get('/taxs',[TaxController::class,'tax_list'])->name('admin.tax');
Route::get('/taxs/form',[TaxController::class,'taxform'])->name('admin.tax.form');
Route::post('/taxs/store',[TaxController::class,'store'])->name('tax.store');

// employee
Route::get('/employee/list',[EmployeeController::class,'employeelist'])->name('admin.employee');
Route::get('/employee/form',[EmployeeController::class,'employeeform'])->name('admin.employee.form');
Route::post('/employees/add',[EmployeeController::class,'add'])->name('employee.add');

// user
Route::get('/user/list',[UserController::class,'userlist'])->name('admin.user');
// Route::get('/admin/user/form',[UserController::class,'userform'])->name('user.form');
// Route::post('/users/store',[UserController::class,'store'])->name('usertable.store');

// city corporation problems
Route::get('/problem/list',[ProblemController::class,'problemlist'])->name('admin.problem.list');
Route::get('/problem/form',[ProblemController::class,'problemform'])->name('problem.form');
Route::post('/problems/store',[ProblemController::class,'store'])->name('problem.store');

// report
Route::get('/report/list',[ReportController::class,'reportlist'])->name('admin.report.list');
Route::get('/report/form',[ReportController::class,'reportform'])->name('report.form');

// feedback of completion task
Route::get('/etask/list',[EtaskController::class,'etasklist'])->name('admin.etask.list');
Route::get('/etask/form',[EtaskController::class,'etaskform'])->name('etask.form');
Route::post('/etasks/add',[EtaskController::class,'add'])->name('etask.add');

// userfeedback
Route::get('/userfeedback/list',[UserfeedbackController::class,'userfeedbacklist'])->name('admin.user.feedback');
Route::get('/userfeedback/form',[UserfeedbackController::class,'userfeedbackform'])->name('user.feedback.form');
Route::post('/userfeedback/store',[UserfeedbackController::class,'store'])->name('userfeedback.store');
Route::get('userfeedback/view/{user_nid}',[UserfeedbackController::class,'userfeedbackDetails'])->name('admin.user.feedback.details');
Route::get('userfeedback/delete/{id}',[UserfeedbackController::class,'userfeedbackdelete'])->name('admin.user.feedback.delete');









});
});







// website part
Route::get('/',[HomeController::class,'homef'])->name('website.home');

// Login/Registration part
Route::get('/user/registration',[LoginController::class,'registrationform'])->name('user.registration');
Route::post('/user/do/registration',[LoginController::class,'doregistration'])->name('user.do.registration');
Route::get('/user/login',[LoginController::class,'loginform'])->name('user.login');
Route::post('/user/do/login',[LoginController::class,'dologin'])->name('user.do.login');
Route::get('/user/logout',[LoginController::class,'logout'])->name('user.logout');









Route::get('/home',[ShowUserController::class,'websiteUser'])->name('website.user');

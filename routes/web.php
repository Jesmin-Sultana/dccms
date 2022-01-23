<?php


use App\Models\User;
use App\Models\Problem;
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
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Backend\AdminloginController;
use App\Http\Controllers\Backend\AssignemployeeController;
use App\Http\Controllers\Frontend\ProblemshowController;
use App\Http\Controllers\Backend\TypeproblemController;
use App\Http\Controllers\Frontend\UserprofileController;
use App\Http\Controllers\Frontend\ShowUserFeedbackController;
use App\Http\Controllers\Frontend\ShowEtaskController;
use App\Http\Controllers\Frontend\EmployeeRegistrationController;

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

// Route::group(['prefix'=>'admin'],function(){

// Admin Login
Route::get('/login',[AdminloginController::class,'login'])->name('admin.login');
Route::post('/login',[AdminloginController::class,'dologin'])->name('admin.do.login');


Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){
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
Route::get('tax/view/{tin_number}',[TaxController::class,'taxDetails'])->name('admin.tax.details');
Route::get('tax/delete/{id}',[TaxController::class,'taxdelete'])->name('admin.tax.delete');


// employee
Route::get('/employee/list',[EmployeeController::class,'employeelist'])->name('admin.employee');
Route::get('/employee/form',[EmployeeController::class,'employeeform'])->name('admin.employee.form');
Route::post('/employees/add',[EmployeeController::class,'add'])->name('employee.add');
Route::get('employee/view/{id}',[EmployeeController::class,'employeeDetails'])->name('admin.employee.details');
Route::get('employee/info/edit/{id}',[EmployeeController::class,'employeeEdit'])->name('admin.employee.edit');
Route::put('employee/info/update/{id}',[EmployeeController::class,'employeeupdate'])->name('admin.employee.info.update');
Route::get('employees/delete/{id}',[EmployeeController::class,'employeedelete'])->name('admin.employee.details.delete');


// user
Route::get('/user/list',[UserController::class,'userlist'])->name('admin.user');
// Route::get('/admin/user/form',[UserController::class,'userform'])->name('user.form');
// Route::post('/users/store',[UserController::class,'userstore'])->name('usertable.store');





// city corporation problems
Route::get('/problem/list',[ProblemController::class,'problemlist'])->name('admin.problems.list');
Route::get('/problem/form',[ProblemController::class,'problemform'])->name('problem.form');
Route::post('/problems/store',[ProblemController::class,'store'])->name('problem.store');
Route::get('probleminfo/view/{id}',[ProblemController::class,'probleminfoDetails'])->name('admin.problem.info.details');
Route::get('probleminfo/edit/{id}',[ProblemController::class,'problemEdit'])->name('admin.problem.edit');
Route::put('probleminfo/update/{id}',[ProblemController::class,'problemupdate'])->name('admin.problem.info.update');
Route::get('probleminfo/delete/{id}',[ProblemController::class,'probleminfoDelete'])->name('admin.problem.info.delete');
Route::put('assign/employee/update/{id}',[ProblemController::class,'assignemployeeupdate'])->name('admin.do.assign.employee');

Route::get('/assign/employee/status/{id}',[ProblemController::class,'statusupdate'])->name('admin.assign.employee.status');



// report
Route::get('/report/list',[ReportController::class,'reportlist'])->name('admin.report.list');
Route::get('/report/form',[ReportController::class,'reportform'])->name('report.form');




// feedback of completion task
Route::get('/etask/list',[EtaskController::class,'etasklist'])->name('admin.etask.list');
Route::get('/etask/form',[EtaskController::class,'etaskform'])->name('etask.form');
Route::post('/etasks/add',[EtaskController::class,'add'])->name('etask.add');
Route::get('employeefeedback/view/{id}',[EtaskController::class,'etaskDetails'])->name('admin.Employee.feedback.details');
Route::get('etask/edit/{id}',[EtaskController::class,'etaskEdit'])->name('admin.etask.edit');
Route::put('etask/update/{id}',[EtaskController::class,'etaskupdate'])->name('admin.etask.update');
Route::get('employeefeedback/delete/{id}',[EtaskController::class,'etaskdelete'])->name('admin.employee.feedback.delete');



// userfeedback
Route::get('/userfeedback/list',[UserfeedbackController::class,'userfeedbacklist'])->name('admin.user.feedback');
Route::get('/userfeedback/form',[UserfeedbackController::class,'userfeedbackform'])->name('user.feedback.form');
Route::post('/userfeedback/store',[UserfeedbackController::class,'store'])->name('userfeedback.store');
Route::get('userfeedback/view/{id}',[UserfeedbackController::class,'userfeedbackDetails'])->name('admin.user.feedback.details');
Route::get('userfeedback/edit/{id}',[UserfeedbackController::class,'userfeedbackedit'])->name('admin.user.feedback.edit');
Route::put('userfeedback/update/{id}',[UserfeedbackController::class,'userfeedbackupdate'])->name('admin.user.feedback.update');
Route::get('userfeedback/delete/{id}',[UserfeedbackController::class,'userfeedbackdelete'])->name('admin.user.feedback.delete');

// Assign Employee
Route::get('/assign/employee/list',[AssignemployeeController::class,'assignform'])->name('admin.assign.employee');

// Problem Type
Route::get('/problem/type/list',[TypeproblemController::class,'typeform'])->name('admin.problem.type');
Route::get('/problem/type/form',[TypeproblemController::class,'typeprob'])->name('admin.typeproblem.form');
Route::post('/problem/type/store',[TypeproblemController::class, 'problemstore'])->name('admin.type.problem.store');


});
// });



// website part
Route::get('/',[HomeController::class,'homef'])->name('website.home');

// Login/Registration part
Route::get('/user/registration',[LoginController::class,'registrationform'])->name('user.registration');
Route::post('/user/do/registration',[LoginController::class,'doregistration'])->name('user.do.registration');
Route::get('/user/login',[LoginController::class,'loginform'])->name('user.login');
Route::post('/user/do/login',[LoginController::class,'dologin'])->name('user.do.login');
Route::get('/user/logout',[LoginController::class,'logout'])->name('user.logout');





Route::get('/home',[ShowUserController::class,'websiteUser'])->name('website.user');



// Website City Corporation Problem
Route::get('/user/website/problem',[ProblemshowController::class,'websiteproblem'])->name('website.show.problem');
Route::post('/user/website/problem/show',[ProblemshowController::class,'doshowproblem'])->name('admin.problem.list');

// User Profile

Route::get('/user/profile',[UserprofileController::class,'userprofilew'])->name('website.user.profile');
Route::put('/user/store/profile{id}',[UserprofileController::class,'userprofilewstore'])->name('user.website.profile.store');

Route::get('/user/probleminfo/view/{id}',[UserprofileController::class,'showproblemview'])->name('website.problem.info.details');





// Website User Feedback

Route::get('/user/show/feedback',[ShowUserFeedbackController::class,'userfeedbackw'])->name('website.show.user.feedback');
Route::post('/user/website/feedback',[ShowUserFeedbackController::class,'douserfeedback'])->name('admin.users.feedback');

// Feedback of Employee
Route::get('/employee/show/feedback/{id}',[ShowEtaskController::class,'etaskw'])->name('website.show.employee.feedback');
Route::post('/employee/website/feedback',[ShowEtaskController::class,'doetaskfeedback'])->name('admin.etasks.list');


// Employee Registration
Route::get('/website/employee/registration',[EmployeeRegistrationController::class,'employeereg'])->name('website.employee.registration');
Route::post('/website/employee/registration/store',[EmployeeRegistrationController::class,'doemployeeregistration'])->name('website.do.employee.registration');

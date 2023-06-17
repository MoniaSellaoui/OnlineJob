<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

//client controller pages
Route::get('/home',[ClientController::class,'home']);
Route::get('/advanced',[ClientController::class,'advanced']);
Route::get('/jobbycompany',[ClientController::class,'jobbycompany']);
Route::get('/jobbyfunction',[ClientController::class,'jobbyfunction']);
Route::get('/jobbytitle',[ClientController::class,'jobbytitle']);
Route::get('/jobbycategory/{name}',[ClientController::class,'jobbycategory']);
Route::get('/companies',[ClientController::class,'companies']);
Route::get('/hiring',[ClientController::class,'hiring']);
Route::get('/aboutus',[ClientController::class,'aboutus']);
Route::get('/contactus',[ClientController::class,'contactus']);
Route::get('/submitapp/{id}',[ClientController::class,'submitapp']);
Route::get('/hiringcompany/{name}',[ClientController::class,'hiringcompany']);
Route::get('/jobdetails/{id}',[ClientController::class,'jobdetails']);
Route::get('/register',[ClientController::class,'register']);
Route::post('/createaccount',[ClientController::class,'createaccount']);
Route::post('/login',[ClientController::class,'login']);
Route::get('/logout',[ClientController::class,'logout']);
Route::post('/submit',[ClientController::class,'submit']);
Route::get('/success',[ClientController::class,'success']);
Route::get('/profile',[ClientController::class,'profile']);
Route::get('/profile/message',[ClientController::class,'message']);
Route::get('/profile/readmessage',[ClientController::class,'readmessage']);
Route::get('/jobapplied',[ClientController::class,'jobapplied']);


//admin controller pages
Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
Route::get('/admin/companies',[AdminController::class,'companies']);
Route::get('/admin/categories',[AdminController::class,'category']);
Route::get('/admin/vacancies',[AdminController::class,'vacancy']);
Route::get('/admin/employees',[AdminController::class,'employee']);
Route::get('/admin/users',[AdminController::class,'users']);
Route::get('/admin/applicants',[AdminController::class,'applicants']);
Route::get('/admin/viewapplicant/{clientid}/{vacancyid}',[AdminController::class,'viewapplicant']);
Route::get('admin/deleteapplicant/{id}',[AdminController::class,'deleteapplicant']);
Route::post('/admin/sendfeedback',[AdminController::class,'sendfeedback']);
Route::get('/admin/addcompany',[AdminController::class,'addcompany']);
Route::get('/admin/addcategory',[AdminController::class,'addcategory']);
Route::get('/admin/addemployee',[AdminController::class,'addemployee']);
Route::get('/admin/adduser',[AdminController::class,'adduser']);
Route::get('/admin/addvacancy',[AdminController::class,'addvacancy']);
Route::get('/admin/userprofile',[AdminController::class,'userprofile']);
Route::post('/admin/savecompany',[AdminController::class,'savecompany']);
Route::get('/admin/deletecompany/{id}',[AdminController::class,'deletecompany']);
Route::get('/admin/editcompany/{id}',[AdminController::class,'editcompany']);
Route::post('/admin/updatecompany',[AdminController::class,'updatecompany']);
Route::post('/admin/saveemployee',[AdminController::class,'saveemployee']);
Route::get('/admin/deleteemployee/{id}',[AdminController::class,'deleteemployee']);
Route::get('/admin/editemployee/{id}',[AdminController::class,'editemployee']);
Route::post('/admin/updateemployee',[AdminController::class,'updateemployee']);
Route::post('/admin/savecategory',[AdminController::class,'savecategory']);
Route::get('/admin/deletecategory/{id}',[AdminController::class,'deletecategory']);
Route::get('/admin/editcategory/{id}',[AdminController::class,'editcategory']);
Route::post('/admin/updatecategory',[AdminController::class,'updatecategory']);
Route::post('/admin/createvacancy',[AdminController::class,'createvacancy']);
Route::get('/admin/deletevacancy/{id}',[AdminController::class,'deletevacancy']);
Route::get('/admin/editvacancy/{id}',[AdminController::class,'editvacancy']);
Route::post('/admin/updatevacancy',[AdminController::class,'updatevacancy']);

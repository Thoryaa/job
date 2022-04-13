<?php

use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

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
//Home
Route::get('/',[HomeController::class,'showHome'])->name('home');
//login
Route::get('/login',[HomeController::class,'showlogin'])->name('log');
//signup
Route::get('/signup',[HomeController::class,'showsignup'])->name('sign');
//services
Route::get('/service',[HomeController::class,'showservice'])->name('service');
//profile
Route::get('/profile',[HomeController::class,'showprofile'])->name('profile');
//job
Route::get('/job',[HomeController::class,'showjobs'])->name('job');
//job details
Route::get('/jobdetails',[HomeController::class,'showjobdetails'])->name('jobdetails');
//companies
Route::get('/comp',[HomeController::class,'showcompanies'])->name('comp');
//concat
Route::get('/contact',[HomeController::class,'showcontact'])->name('contact');
//about
Route::get('/about',[HomeController::class,'showabout'])->name('about');
//account
Route::get('/account',[HomeController::class,'showaccount'])->name('acount');
//admin  dashboard 
Route::get('/dash',[HomeController::class,'dash'])->name('dash'); 
//user dashboard 
Route::get('/dashboard',[HomeController::class,'showdashboard'])->name('dashboard');
<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\User\CourseController;
use App\Http\Controllers\User\EduController;
use App\Http\Controllers\User\ExperinceController;
use App\Http\Controllers\User\personalController;
use App\Http\Controllers\User\SkillController;
use App\Http\Controllers\User\UserController;
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
// */
// Route::get('/',[HomeController::class,'showHome'])->name('home');
Route::get('/login',[HomeController::class,'showlogin'])->name('log');
Route::get('/signup',[HomeController::class,'showsignup'])->name('sign');
Route::get('/service',[HomeController::class,'showservice'])->name('service');
Route::get('/profile',[HomeController::class,'showprofile'])->name('profile');
Route::get('/job',[HomeController::class,'showjobs'])->name('job');
Route::get('/jobdetails',[HomeController::class,'showjobdetails'])->name('jobdetails');
Route::get('/dashboard',[HomeController::class,'showdashboard'])->name('dashboard');
Route::get('/comp',[HomeController::class,'showcompanies'])->name('comp');
Route::get('/contact',[HomeController::class,'showcontact'])->name('contact');
Route::get('/about',[HomeController::class,'showabout'])->name('about');
Route::get('/account',[HomeController::class,'showaccount'])->name('acount');
Route::get('/dash',[HomeController::class,'dash'])->name('dash'); 
 

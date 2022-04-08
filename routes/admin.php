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

 
 
//company 
Route::get('/AddCompany',[company::class,'AddCompany'])->name('addcompany');
Route::get('/ShowCompany',[Company::class,'ShowCompany'])->name('listcompany'); 
Route::get('/SaveCompany',[Company::class,'CreateCompany'])->name('save_companyInfo'); 

//job
Route::get('/AddJobs',[job::class,'AddJob'])->name('addjob');
Route::get('/ShowJobs',[job::class,'ShowJobs'])->name('listjob'); 
//users
Route::get('/ListUser',[Users::class,'ShowUser'])->name('listuser');
//Role
Route::get('/AddRole',[Role::class,'AddRole'])->name('addRole');
Route::get('/ShowRole',[Role::class,'ShowRoles'])->name('listRole'); 
Route::post('/sRole',[Role::class,'sRole'])->name('sRole');
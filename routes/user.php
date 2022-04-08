<?php

use App\Http\Controllers\Home\HomeController;
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
*/
Route::get('/userdash',[UserController::class,'Udash'])->name('userdash');
//skills
Route::get('/addskills',[UserController::class,'Addcourse'])->name('addSkills');
Route::get('/listkills',[UserController::class,'ListAllCourse'])->name('listAllSkills');
//course
Route::get('/addcourse',[UserController::class,'Udash'])->name('addCourse');
Route::get('/listcourse',[UserController::class,'Udash'])->name('listAllCourse');
//edu
Route::get('/addedu',[UserController::class,'Addedu'])->name('addEdu');
Route::get('/listedu',[UserController::class,'ListAlledu'])->name('listAllEdu');
//experince
Route::get('/addexperince',[UserController::class,'Addexp'])->name('addExp');
Route::get('/listexperince',[UserController::class,'ListAllexp'])->name('listAllExp');
//personal
Route::get('/addpersonalinfo',[UserController::class,'Addpersonalinfo'])->name('AddPersonal');
Route::get('/listpersonalinfo',[UserController::class,'ListAllpersonalinfo'])->name('listAllPersonal');


 
 

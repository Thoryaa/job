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
*/
Route::get('/userdash',[UserController::class,'Udash'])->name('userdash');
//skills
Route::get('/addskills',[SkillController::class,'Addskills'])->name('addSkills');
Route::get('/listkills',[SkillController::class,'ListAllSkills'])->name('listAllSkills');
//course
Route::get('/addcourse',[CourseController::class,'Addcourse'])->name('Addcourse');
Route::get('/listcourse',[CourseController::class,'ListAllCourse'])->name('listAllCourse');
//edu
Route::get('/addedu',[EduController::class,'Addedu'])->name('addEdu');
Route::get('/listedu',[EduController::class,'ListAlledu'])->name('listAllEdu');
//experince
Route::get('/addexperince',[ExperinceController::class,'Addexp'])->name('addExp');
Route::get('/listexperince',[ExperinceController::class,'ListAllexp'])->name('listAllExp');
//personal
Route::get('/addpersonalinfo',[personalController::class,'Addpersonalinfo'])->name('AddPersonal');
Route::get('/listpersonalinfo',[personalController::class,'ListAllpersonalinfo'])->name('listAllPersonal');


 
 

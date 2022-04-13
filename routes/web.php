<?php
use App\Http\Controllers\User\CourseController;
use App\Http\Controllers\User\EduController;
use App\Http\Controllers\User\ExperinceController;
use App\Http\Controllers\User\personalController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Home\SkillControllers;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Auth\Events\Verified;
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
Route::prefix('admin')->group(function(){
    Route::get('/login',[AdminController::class,'Index'])->name("login_from");
    Route::get('/login/owner',[AdminController::class,'Login'])->name("amin.login");
    Route::get('/dashboard',[AdminController::class,'Dashboard'])->name("admin.dashboard");

});


Route::get('/dashboard',[UserController::class,'Udash'])->middleware(['auth'])->name('dashboard')->middleware('verified');


require __DIR__.'/auth.php';

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

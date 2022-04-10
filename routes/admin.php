<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\jobController;
use App\Http\Controllers\Admin\RooleController;
use App\Http\Controllers\Admin\UController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\ServicesContainer;

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

 /*
 Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],
function()
{
	Route::get('/', function()
	{
		return View::make('hello');
	});

	Route::get('test',function(){
		return View::make('test');
	});
});
 */
 
//company 
Route::get('/AddCompany',[CompanyController::class,'AddCompany'])->name('addcompany');
Route::get('/ShowCompany',[CompanyController::class,'ShowCompany'])->name('listcompany'); 
Route::get('/SaveCompany',[CompanyController::class,'CreateCompany'])->name('save_companyInfo'); 

//job
Route::get('/AddJobs',[jobController::class,'AddJob'])->name('addjob');
Route::get('/ShowJobs',[jobController::class,'ShowJobs'])->name('listjob'); 
//users
Route::get('/ListUser',[UController::class,'ShowUser'])->name('listuser');
Route::get('/AddUser',[UController::class,'AddUser'])->name('adduser');
Route::get('/saveUser',[UController::class,'aUser'])->name('saveuser');

//Role
Route::get('/AddRole',[RooleController::class,'AddRole'])->name('addRole');
Route::get('/ShowRole',[RooleController::class,'ShowRoles'])->name('listRole'); 
Route::post('/sRole',[RooleController::class,'sRole'])->name('sRole');
//services_
Route::get('/add_service', [ServicesContainer::class,'create'])->name('add_service');
Route::get('/edit_service/{ser_id}',[ServicesContainer::class,'edit'])->name('edit_services');
Route::get('/toggle_service/{ser_id}',[ServicesContainer::class,'toggle'])->name('toggle_services');
Route::post('/save_service',[ServicesContainer::class,'store'])->name('save_services');
Route::post('/update_service/{ser_id}',[ServicesContainer::class,'update'])->name('update_services');
Route::get('/list_service',[ServicesContainer::class,'index'])->name('list');

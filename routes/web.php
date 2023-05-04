<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AddcompanyController;
use App\Http\Controllers\CompanyprofileController;

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
    return view('layout.sana');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin_home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::post('/admin_home',[AddcompanyController::class, 'admin_Home']);

Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
Route::post('/index',[AddcompanyController::class, 'index']);

// companyprofile Routes...
Route::get('/company_profile',[AddcompanyController ::class,'create'])->name('company_profile');

Route::get('/companyprofile',[CompanyprofileController::class,'company'])->name('companyprofile');
// Route::get('/index',[AddcompanyController::class, 'index']);


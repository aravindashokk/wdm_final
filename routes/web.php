<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Business\BusinessDashboardController;
use App\Http\Controllers\School\SchoolDashbordController;
use App\Http\Controllers\Student\StudentDashboardController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/custom-logout', function () {
    Auth::logout();
    return redirect()->to('/');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin');
Route::get('school/dashboard', [SchoolDashbordController::class, 'index'])->name('school');
Route::get('business/dashboard', [BusinessDashboardController::class, 'index'])->name('business');
Route::get('student/dashboard', [StudentDashboardController::class, 'index'])->name('student');
Route::name('admin.')->prefix('admin')->group(function(){
    Route::get('create-business', [AdminDashboardController::class, 'createbusiness'])->name('addbusiness');
});

// ::
//

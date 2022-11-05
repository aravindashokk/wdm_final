<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Business\BusinessDashboardController;
use App\Http\Controllers\PagesController;
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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin');
Route::get('school/dashboard', [SchoolDashbordController::class, 'index'])->name('schooladmin');
Route::get('business/dashboard', [BusinessDashboardController::class, 'index'])->name('businessowner');
Route::get('student/dashboard', [StudentDashboardController::class, 'index'])->name('student');
Route::post('student-register', [PagesController::class, 'createstudentaccount'])->name('createstudentaccount');
Route::get('school-register', [PagesController::class, 'createschoolaccount'])->name('schoolaccount');
Route::get('business-register', [PagesController::class, 'createbusinessaccount'])->name('businessaccount');
Route::post('store-school-account', [PagesController::class, 'storeschoolaccount'])->name('storeschoolaccount');
Route::post('store-business-account', [PagesController::class, 'storebusinessaccount'])->name('storebusinessaccount');
Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('create-business', [AdminDashboardController::class, 'createbusiness'])->name('addbusiness');
    Route::post('store-business', [AdminDashboardController::class, 'storebusiness'])->name('storebusiness');
    Route::get('all-business', [AdminDashboardController::class, 'allbusiness'])->name('managebusiness');
    Route::get('edit-business/{slug}', [AdminDashboardController::class, 'editbusiness'])->name('editbusiness');
    Route::patch('update-business/{slug}', [AdminDashboardController::class, 'updatebusiness'])->name('updatebusiness');
    Route::delete('delete-business/{slug}', [AdminDashboardController::class, 'deletebusiness'])->name('deletebusiness');
    Route::get('onboard-school', [AdminDashboardController::class, 'createschool'])->name('addschool');
    Route::get('manage-schools', [AdminDashboardController::class, 'allschools'])->name('manageschools');
    Route::post('store-school', [AdminDashboardController::class, 'storeschool'])->name('storeschool');
    Route::get('edit-school/{slug}', [AdminDashboardController::class, 'editschool'])->name('editschool');
    Route::patch('update-school/{slug}', [AdminDashboardController::class, 'updateschool'])->name('updateschool');
    Route::delete('delete-school/{slug}', [AdminDashboardController::class, 'deleteschool'])->name('deleteschool');
    Route::get('onboard-student', [AdminDashboardController::class, 'createstudent'])->name('addstudent');
    Route::get('manage-students', [AdminDashboardController::class, 'allstudents'])->name('managestudents');
    Route::post('store-student', [AdminDashboardController::class, 'storestudent'])->name('storestudent');
    Route::get('edit-student/{slug}', [AdminDashboardController::class, 'editstudent'])->name('editstudent');
    Route::patch('update-student/{slug}', [AdminDashboardController::class, 'updatestudent'])->name('updatestudent');
    Route::delete('delete-student/{slug}', [AdminDashboardController::class, 'deletestudent'])->name('deletestudent');
    Route::get('account-settings', [AdminDashboardController::class, 'updateprofile'])->name('profile');
    Route::post('update-profile', [AdminDashboardController::class, 'saveaccountpassword'])->name('updatepassword');
    Route::post('save-new-email', [AdminDashboardController::class, 'saveaccountemail'])->name('saveaccountemail');
    Route::get('open-conversations', [AdminDashboardController::class, 'allchats'])->name('allchats');
});
Route::name('businessowner.')->prefix('businessowner')->group(function () {

    Route::get('upload-product', [BusinessDashboardController::class, 'addproduct'])->name('addproduct');
    Route::post('store-product', [BusinessDashboardController::class, 'storeproduct'])->name('storeproduct');
    Route::get('my-products', [BusinessDashboardController::class, 'myproducts'])->name('myproducts');
    Route::get('edit-product/{slug}', [BusinessDashboardController::class, 'editproduct'])->name('editproduct');
    Route::patch('update-product/{slug}', [BusinessDashboardController::class, 'updateproduct'])->name('updateproduct');
    Route::delete('delete-product/{slug}', [BusinessDashboardController::class, 'deleteproduct'])->name('deleteproduct');
    Route::get('account-settings', [BusinessDashboardController::class, 'updateprofile'])->name('profile');
    Route::post('update-profile', [BusinessDashboardController::class, 'saveaccountpassword'])->name('updatepassword');
    Route::post('save-new-email', [BusinessDashboardController::class, 'saveaccountemail'])->name('saveaccountemail');
    Route::get('open-conversations', [BusinessDashboardController::class, 'allchats'])->name('allchats');
});
Route::name('student.')->prefix('student')->group(function () {

    Route::get('all-products', [StudentDashboardController::class, 'allproducts'])->name('allproducts');
    Route::post('store-to-cart', [StudentDashboardController::class, 'addtocart'])->name('addtocart');
    Route::get('my-cart', [StudentDashboardController::class, 'mycart'])->name('mycart');
    Route::post('remove-product', [StudentDashboardController::class, 'removecart'])->name('removecart');
    Route::get('product-details/{slug}', [StudentDashboardController::class, 'productdetails'])->name('productdetails');
    Route::get('account-settings', [StudentDashboardController::class, 'updateprofile'])->name('profile');
    Route::post('update-profile', [StudentDashboardController::class, 'saveaccountpassword'])->name('updatepassword');
    Route::post('save-new-email', [StudentDashboardController::class, 'saveaccountemail'])->name('saveaccountemail');
    Route::get('check-out', [StudentDashboardController::class, 'checkout'])->name('checkout');
});
Route::delete('delete-student/{slug}', [SchoolDashbordController::class, 'deletestudent'])->name('schooladmin.deletestudent');
Route::get('school/update-profile', [SchoolDashbordController::class, 'updateprofile'])->name('schooladmin.profile');
Route::post('school/update-profile', [SchoolDashbordController::class, 'saveaccountpassword'])->name('schooladmin.updatepassword');
Route::post('school/save-new-email', [SchoolDashbordController::class, 'saveaccountemail'])->name('schooladmin.saveaccountemail');
Route::get('school/open-conversations', [SchoolDashbordController::class, 'allchats'])->name('schooladmin.allchats');
// ::
//

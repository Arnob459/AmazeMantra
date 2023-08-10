<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CheckUsernameController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Auth\LoginController as UserLoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\VerificationController;



use App\Http\Controllers\Admin\DashboardController ;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('checkusername', [CheckUsernameController::class, 'Checkusername'])->name('checkusername');
Route::get('checkemail', [CheckUsernameController::class, 'checkemail'])->name('checkemail');

Route::get('checkphone', [CheckUsernameController::class, 'checkphone'])->name('checkphone');
Route::get('/pass', [CheckUsernameController::class, 'pass'])->name('pass');

// Route::get('/admin_login', [logcontroller::class, 'showLoginForm'])->name('adminlogin');
// Route::post('/admin_login', [logcontroller::class, 'login'])->name('admin.login');




//Admin

Route::group(['prefix' => 'admin'],function(){
    Route::middleware(['is_admin_guest'])->group(function () {
        //Your routes here
        Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('adminlogin');
        Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login');
    });
    Route::middleware(['is_admin'])->group(function () {
        //Your routes here
        Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    });


});

//User

Route::group(['prefix' => 'user'],function(){
    Route::middleware(['guest'])->group(function () {
        //Your routes here
        Route::get('/forgotpassword', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('forgot.password');
        Route::post('/forgotpassword', [ForgotPasswordController::class, 'showotp'])->name('show.otp');
        Route::get('/createotp', [ForgotPasswordController::class, 'createotp'])->name('create.otp');
        Route::post('/createotp', [ForgotPasswordController::class, 'otpConfirm'])->name('otp.confirm');
        Route::get('/createnewpass', [ForgotPasswordController::class, 'createnewPass'])->name('createnew.pass');
        Route::post('/createnewpass', [ForgotPasswordController::class, 'createPass'])->name('new.pass');


    });


    Route::middleware(['auth'])->group(function () {
        //Your routes here
        Route::get('/home', [HomeController::class, 'index'])->name('home');

        Route::get('/logout', [UserLoginController::class, 'logout'])->name('user.logout');
    });


});





//   POST       email/resend  verification.resend › Auth\VerificationController@resend
//   GET|HEAD   email/verify  verification.notice › Auth\VerificationController@show
//   GET|HEAD   email/verify/{id}/{hash}  verification.verify › Auth\VerificationController@verify

//   GET|HEAD   pass  pass › Auth\CheckUsernameController@pass
//   GET|HEAD   password/confirm  password.confirm › Auth\ConfirmPasswordController@showConfirmForm
//   POST       password/confirm  generated::JDJDPhR9RdH7BEQL › Auth\ConfirmPasswordController@confirm
//   POST       password/email password.email › Auth\ForgotPasswordController@sendResetLinkEmail
//   GET|HEAD   password/reset  password.request › Auth\ForgotPasswordController@showLinkRequestForm
//   POST       password/reset  password.update › Auth\ResetPasswordController@reset
//   GET|HEAD   password/reset/{token}  password.reset › Auth\ResetPasswordController@showResetForm












Auth::routes();

// Auth::routes(['verify' => true]);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





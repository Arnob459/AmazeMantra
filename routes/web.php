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
use App\Http\Controllers\Admin\UserManageController ;

use App\Http\Controllers\Admin\PagesController ;






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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [PagesController::class, 'Index'])->name('index');


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
        Route::get('/dashboard',[DashboardController::class,'Dashboard'])->name('admin.dashboard');

        Route::get('/edit/{id}',[DashboardController::class,'AdminDetails'])->name('admin.details');
        Route::post('/update/{id}',[DashboardController::class,'AdminDetailsUpdate'])->name('admin.detailsupdate');

        Route::get('/passedit/{id}',[DashboardController::class,'AdminPassDetails'])->name('admin.passdetails');
        Route::post('/passupdate/{id}',[DashboardController::class,'AdminPassDetailsUpdate'])->name('admin.passdetailsupdate');


        //Dynamic

        Route::get('/Homepage',[PagesController::class,'home'])->name('admin.homepage');
        Route::post('/Homepage',[PagesController::class,'updatehome'])->name('admin.updatehome');

        //Genaral Setting
        Route::get('/genaral/create',[PagesController::class,'GenaralCreate'])->name('admin.genaral.create');
        Route::post('/genaral/create',[PagesController::class,'GenaralUpdate'])->name('admin.genaral.update');

        //Home
        Route::get('/Home/create',[PagesController::class,'HomeCreate'])->name('admin.home.create');
        Route::post('/Home/create',[PagesController::class,'HomeUpdate'])->name('admin.home.update');

        //About
        Route::get('/about/create',[PagesController::class,'AboutCreate'])->name('admin.about.create');
        Route::post('/about/create',[PagesController::class,'AboutUpdate'])->name('admin.about.update');

        //Brand
        Route::get('/brand/create',[PagesController::class,'BrandCreate'])->name('admin.brand.create');
        Route::post('/brand/create',[PagesController::class,'BrandUpdate'])->name('admin.brand.update');
        Route::get('brandlist/create',[PagesController::class,'BrandListCreate'])->name('admin.brandlist.create');
        Route::post('brandlist/create',[PagesController::class,'BrandListStore'])->name('admin.brandlist.store');
        Route::get('brandlist/list',[PagesController::class,'Brandlist'])->name('admin.brandlist.list');
        Route::get('brandlist/edit/{id}',[PagesController::class,'BrandListEdit'])->name('admin.brandlist.edit');
        Route::post('brandlist/update/{id}',[PagesController::class,'BrandListUpdate'])->name('admin.brandlist.update');
        Route::get('brandlist/delete/{id}',[PagesController::class,'BrandListDelete'])->name('admin.brandlist.delete');

        //work
        Route::get('/work/new',[PagesController::class,'Work'])->name('admin.work');
        Route::post('/work/new',[PagesController::class,'WorkStore'])->name('admin.workstore');
        Route::get('work/create',[PagesController::class,'WorkListCreate'])->name('admin.work.create');
        Route::post('work/create',[PagesController::class,'WorkListStore'])->name('admin.work.store');
        Route::get('work/list',[PagesController::class,'WorkList'])->name('admin.work.list');
        Route::get('work/edit/{id}',[PagesController::class,'WorkEdit'])->name('admin.work.edit');
        Route::post('work/update/{id}',[PagesController::class,'WorkUpdate'])->name('admin.work.update');
        Route::get('work/delete/{id}',[PagesController::class,'WorkDelete'])->name('admin.work.delete');

        //Voucher
        Route::get('/voucher/new',[PagesController::class,'Voucher'])->name('admin.voucher');
        Route::post('/voucher/new',[PagesController::class,'VoucherStore'])->name('admin.voucherstore');
        Route::get('voucher/create',[PagesController::class,'VoucherListCreate'])->name('admin.voucher.create');
        Route::post('voucher/create',[PagesController::class,'VoucherListStore'])->name('admin.voucher.store');
        Route::get('voucher/list',[PagesController::class,'VoucherList'])->name('admin.voucher.list');
        Route::get('voucher/edit/{id}',[PagesController::class,'VoucherEdit'])->name('admin.voucher.edit');
        Route::post('voucher/update/{id}',[PagesController::class,'VoucherUpdate'])->name('admin.voucher.update');
        Route::get('voucher/delete/{id}',[PagesController::class,'VoucherDelete'])->name('admin.voucher.delete');

        //Contact
        Route::get('/contact/new',[PagesController::class,'Contact'])->name('admin.contact');
        Route::post('/contact/new',[PagesController::class,'ContactStore'])->name('admin.contactstore');
        Route::get('link/create',[PagesController::class,'LinkListCreate'])->name('admin.link.create');
        Route::post('link/create',[PagesController::class,'LinkListStore'])->name('admin.link.store');
        Route::get('link/list',[PagesController::class,'LinkList'])->name('admin.link.list');
        Route::get('link/edit/{id}',[PagesController::class,'LinkEdit'])->name('admin.link.edit');
        Route::post('link/update/{id}',[PagesController::class,'LinkUpdate'])->name('admin.link.update');
        Route::get('link/delete/{id}',[PagesController::class,'LinkDelete'])->name('admin.link.delete');

        //Dynamic End

        //Manage users
        Route::get('/manage/allusers',[UserManageController::class,'AllUsers'])->name('admin.manage.alluser');
        Route::get('/manage/activeusers',[UserManageController::class,'ActiveUsers'])->name('admin.manage.activeuser');
        Route::get('/manage/pendingusers',[UserManageController::class,'PendingUsers'])->name('admin.manage.pendinguser');
        Route::get('/manage/emailverifiedusers',[UserManageController::class,'EmailVerifiedUsers'])->name('admin.manage.emailverifiedusers');

        Route::get('manage/edit/{id}',[UserManageController::class,'UserDetails'])->name('admin.user.details');
        Route::post('manage/update/{id}',[UserManageController::class,'UserDetailsUpdate'])->name('admin.user.detailsupdate');





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





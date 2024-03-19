<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
route::get('redirect',[HomeController::class,'redirect']);
route::get('/',[HomeController::class,'index']);
route::get('/redirect',[HomeController::class,'redirect']);

route::get('/view_category',[AdminController::class,'view_category']);

route::post('/add_category',[AdminController::class,'add_category']);

route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

route::get('/form',[HomeController::class,'form_complaint']);

route::post('/add_complaint',[HomeController::class,'add_complaint']);

route::get('/show_usercomplaintnew',[AdminController::class,'show_usercomplaintnew']);

route::get('/mycomplaint',[HomeController::class,'mycomplaint']);

route::get('/view_users',[AdminController::class,'view_users']);

route::get('/update_complaint/{id}',[AdminController::class,'update_complaint']);

route::post('/update_complaint_confirm/{id}',[AdminController::class,'update_complaint_confirm']);


route::get('/accept_update_complaint/{id}',[AdminController::class,'accept_update_complaint']);

route::post('/accept_update_complaint_confirm/{id}',[AdminController::class,'accept_update_complaint_confirm']);


route::get('/reject_update_complaint/{id}',[AdminController::class,'reject_update_complaint']);

route::post('/reject_update_complaint_confirm/{id}',[AdminController::class,'reject_update_complaint_confirm']);


route::get('/complete_update_complaint/{id}',[AdminController::class,'complete_update_complaint']);

route::post('/complete_update_complaint_confirm/{id}',[AdminController::class,'complete_update_complaint_confirm']);


route::get('/delete_complaint/{id}',[AdminController::class,'delete_complaint']);

route::get('/searchuser',[AdminController::class,'searchuser']);

route::get('/searchcomplaint',[AdminController::class,'searchcomplaint']);

route::get('/show_dashboard',[AdminController::class,'show_dashboard']);

route::get('/complaint_details/{id}',[AdminController::class,'complaint_details']);

route::get('/complete_complaint_details/{id}',[AdminController::class,'complete_complaint_details']);

route::get('/accept_complaint_details/{id}',[AdminController::class,'accept_complaint_details']);




route::get('/reject_complaint_details/{id}',[AdminController::class,'reject_complaint_details']);

route::get('/accept_complaint/{id}',[AdminController::class,'accept_complaint']);

route::get('/accept_complaintdet/{id}',[AdminController::class,'accept_complaintdet']);

route::get('/retrive_accept_complaintdet/{id}',[AdminController::class,'retrive_accept_complaintdet']);



route::get('/service_page',[HomeController::class,'servicepage']);



route::get('/reject_complaint/{id}',[AdminController::class,'reject_complaint']);

route::get('/reject_complaintdet/{id}',[AdminController::class,'reject_complaintdet']);

route::get('/complete_complaint/{id}',[AdminController::class,'complete_complaint']);
route::get('/complete_complaintdet/{id}',[AdminController::class,'complete_complaintdet']);




Route::get('/notification', [NotificationController::class, 'sendNotification']);

Route::get('/about_us', [HomeController::class, 'aboutus']);
Route::get('/send-sms-notification', [AdminController::class, 'sendSmsNotificaition']);

Route::get('contact-us', [HomeController::class, 'contact']);
Route::post('/postcontact', [HomeController::class, 'postcontact']);

Route::get('/login_google', [HomeController::class, 'login_google']);
Route::get('/auth/google/callback', [HomeController::class, 'redirect_google']);

Route::get('/login_facebook', [HomeController::class, 'login_facebook']);
Route::get('/auth/facebook/callback', [HomeController::class, 'redirect_facebook']);

Route::get('/feedback_user/{id}', [AdminController::class, 'feedback']);


Route::post('/feedback_user/{id}', [AdminController::class, 'feedback_user']);

Route::get('/show_feedback/{id}', [AdminController::class, 'show_feedback']);
Route::get('/show_usercomplaintnew/{id}', [AdminController::class, 'usercomplaint']);
Route::get('/logout', [HomeController::class, 'logout']);
Route::get('/accepttable', [AdminController::class, 'accepttable']);
Route::get('/rejecttable', [AdminController::class, 'rejecttable']);
Route::get('/completetable', [AdminController::class, 'completetable']);

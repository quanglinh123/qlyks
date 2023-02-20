<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () { return view('welcome');})->name('home');
Route::get('feedback', function () { return view('feedback');})->name('feedback');


//register//
Route::get('register',[UserController::class,'register'])->name('register');
Route::post('register',[UserController::class,'register_action'])->name('register.action');

//login//
Route::get('login',[UserController::class,'login'])->name('login');
Route::post('login',[UserController::class,'login_action'])->name('login.action');

//changepassword//
Route::get('password',[UserController::class,'password'])->name('password');
Route::post('password',[UserController::class,'password_action'])->name('password.action');

//logout//
Route::get('logout',[UserController::class,'logout'])->name('logout');
Route::post('logout',[UserController::class,'logout_action'])->name('logout.action');

//booking//
Route::get('book',[BookingController::class,'book'])->name('book');
Route::post('book',[BookingController::class,'book_action'])->name('book.action');
Route::get('bookss',[BookingController::class,'finalbook_action'])->name('finalbook.action');
Route::get('delete/{book_id}',[BookingController::class,'delete'])->name('delete');

//feedback//
Route::post('feedback',[FeedbackController::class,'feedback_action'])->name('feedback.action');
Route::get('menu',[FeedbackController::class,'fblist_action'])->name('menu');
Route::get('fb.getfb',[FeedbackController::class,'getFeedback'])->name('fb.getfb');

Route::get('feedbacklist',[AdminController::class,'feedbacklist'])->name('feedbacklist');
Route::get('userlist',[AdminController::class,'userlist'])->name('userlist');
Route::post('feedbacklist',[AdminController::class,'feedbacklist_action'])->name('feedbacklist.action');

//admin//
Route::get('admin', [AdminController::class,'admin'])->name('admin');
Route::post('admin_login',[AdminController::class,'admin_login'])->name('admin_login');


Route::get('dalat',[FeedbackController::class,'fblistdalat_action'])->name('dalat');
Route::get('danang',[FeedbackController::class,'fblistdanang_action'])->name('danang');
Route::get('halong',[FeedbackController::class,'fblisthalong_action'])->name('halong');
Route::get('tphcm',[FeedbackController::class,'fblisttphcm_action'])->name('tphcm');
Route::get('phuquoc',[FeedbackController::class,'fblistphuquoc_action'])->name('phuquoc');

Route::get('delete1/{book_id}',[AdminController::class,'delete1'])->name('delete1');
Route::get('update/{book_id}',[AdminController::class,'update'])->name('update');
Route::post('edit/{id}',[AdminController::class,'edit'])->name('edit');

Route::get('checkout', function () { return view('bookroom/checkout');})->name('checkout');
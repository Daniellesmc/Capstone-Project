<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Dashboard
Route::get('dashboard')->name('dashboard')->uses("App\Http\Controllers\Dashboard\DashboardController");

// Login
Route::get('/')->name('home')->uses("App\Http\Controllers\Home\HomeController");
Route::post('login')->name('login')->uses("App\Http\Controllers\Login\LoginController@login");
Route::post('post-login')->name('login.post')->uses("App\Http\Controllers\Login\LoginController@postLogin");

// Logout
Route::get('logout')->name('logout')->uses("App\Http\Controllers\Login\LoginController@logout");

// Signup
Route::get('signup')->name('signup')->uses("App\Http\Controllers\SignUp\SignUpController");
Route::post('signup')->name('signup.store')->uses('App\Http\Controllers\SignUp\SignUpController@store');

// Attendance
Route::get('my-attendance')->name('attendance')->uses('App\Http\Controllers\Attendance\AttendanceController');
Route::post('attendance')->name('attendance.store')->uses('App\Http\Controllers\Attendance\AttendanceController@store');

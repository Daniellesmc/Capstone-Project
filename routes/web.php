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

Route::get('/')->name('login')->uses("App\Http\Controllers\Login\IndexController");

Route::post('/sign-up')->name('sign-up.store')->uses('App\Http\Controllers\SignUp\StoreController');

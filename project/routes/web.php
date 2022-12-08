<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AddfoodController;

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


Route::get('/logout','App\HTTP\Controllers\LoginController@logout');


Route::get('/website',[IndexController::class,'website']);
Route::resource('signin',LoginController::class);
Route::resource('store',StoreController::class);
Route::get('/login','App\HTTP\Controllers\LoginController@login')->name('login');
Route::resource('addfood',AddfoodController::class);
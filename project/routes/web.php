<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AddfoodController;
use App\Http\Controllers\FoodsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

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
Route::resource('Foods',FoodsController::class);
Route::get('/CheckOrders', [OrderController::class,'checkout']);
Route::put('/Carte/{id}/{id2}', [CartController::class,'updateacart']);
Route::get('/Cartdel/{id}/{id2}', [CartController::class,'deleteacart']);
Route::get('Orderdel', [OrderController::class,'cancelorder']);
Route::get('search1',[LoginController::class,'search']);
Route::get('search',[FoodsController::class,'search']);
Route::resource('Cart',CartController::class);
Route::post('/Cart/{id}', [CartController::class,'Addtocart']);
Route::get('/toCart/{id}', [CartController::class,'tocartpage']);
Route::post('/Cart/{id}', [CartController::class,'Addtocart']);
Route::post('/CreateOrder/{total}/{id}', [OrderController::class,'createorder']);
Route::put('updateOrder', [OrderController::class,'updateord']);
Route::resource('Order',OrderController::class);

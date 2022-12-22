<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AddfoodController;
use App\Http\Controllers\FoodsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\bot;
use App\Http\Controllers\StripeController;

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

//Route::post('/CreateOrder/{total}/{id}', [OrderController::class,'createorder']);
Route::post('/CreateOrder/{id}', [OrderController::class,'createorder']);
Route::put('updateOrder', [OrderController::class,'updateord']);
Route::resource('Order',OrderController::class);
Route::get('/userstable', [LoginController::class,'getuser']);

Route::get('/menu','App\HTTP\Controllers\FoodsController@getallfoods')->name('menu');
Route::get('/editmenuinfo','App\HTTP\Controllers\FoodsController@editmenuinfo');
Route::put('/updatemenuinfo/{id}', [FoodsController::class,'updatemenuinfo']);


Route::get('getchefmenu/{id}',[FoodsController::class,'getchefmenu']);

Route::put('/acceptorder/{id}', [OrderController::class,'acceptorder']);
Route::put('/rejectorder/{id}', [OrderController::class,'rejectorder']);

Route::get('/checkpendingorders', [OrderController::class,'checkorders']);

Route::resource('offers',OfferController::class);


Route::get('/userstable', [LoginController::class,'getuser']);
Route::get('/storestable', [LoginController::class,'getstore']);
Route::put('/backtouser/{id}', [LoginController::class,'backtouser']);
Route::get('/foodstable', [FoodsController::class,'getallfood']);
Route::get('/admin', [StoreController::class,'index1']);



//Route::match(['get', 'post'], '/botman','BotManController@handle');
Route::match(['get', 'post'], '/botman','App\Http\Controllers\Bot@handle');


//Route::get('posts', [BotManController::class, 'handle']);
//Route::get('posts', [Bot::class, 'handle']);
Route::resource('review',ReviewController::class);

Route::get('/stripe-payment', [StripeController::class, 'handleGet']);
Route::post('/stripe-payment/{tot}', [StripeController::class, 'handlePost'])->name('stripe.payment');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


  
Route::controller(LoginController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\productCtrl;
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
    return view('dashboard');
})->middleware('auth');

//LOGIN REGISTER
Route::get('/login',function(){
    return view('user.login');
})->middleware('guest');

Route::post('/login',[userController::class,'authanticate'])->name('login');
Route::get('/logout',[userController::class,'logout']);

Route::post('/register',[userController::class,'register']);

Route::get('/register',function(){
    return view('user.register');
});

// 


// PRODUCT
Route::get('/product',[productCtrl::class,'getData'])->middleware('auth');
Route::get('/product/form',[productCtrl::class,'form'])->middleware('auth');
Route::post('/product',[productCtrl::class,'createData']);
Route::delete('/product/{id}',[productCtrl::class,'destroy']);
// 
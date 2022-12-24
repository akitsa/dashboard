<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
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

Route::get('/template', function () {
    return view('layouts.template');
});

Route::get('/login',function(){
    return view('user.login');
});

Route::post('/login',[userController::class,'authanticate']);

Route::post('/register',[userController::class,'register']);

Route::get('/register',function(){
    return view('user.register');
});
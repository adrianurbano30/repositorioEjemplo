<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostlikeController;
use App\Http\Controllers\UserpostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboardIndex')->middleware('auth');
Route::get('/users/{user:username}/post',[UserpostController::class,'index'])->name('user.post');

Route::get('/logout',[LogoutController::class,'store'])->name('logout');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store'])->name('loginstore');

Route::get('/register',[RegisterController::class,'index'])->name('registroUsuario');
Route::post('/register',[RegisterController::class,'store'])->name('registroStore');

Route::get('/post',[PostController::class,'index'])->name('postIndex');
Route::get('/post/{post}',[PostController::class,'show'])->name('post.show');
Route::post('/post',[PostController::class,'store'])->name('postStore');
Route::delete('/post/{post}',[PostController::class,'destroy'])->name('post.destroy');


Route::post('/post/{post}/likes',[PostlikeController::class,'store'])->name('postlikeStore');
Route::delete('/post/{post}/likes',[PostlikeController::class,'destroy'])->name('postunlikeStore');

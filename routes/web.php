<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::post('/register_user',[HomeController::class,'register_user'])->name('register_user');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/validate',[AuthController::class, 'validate'])->name('validate');




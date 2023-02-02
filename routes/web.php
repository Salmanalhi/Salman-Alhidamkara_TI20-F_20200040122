<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

//Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/inner-page', [HomeController::class, 'inner-page']);
Route::get('/portfolio-details', [HomeController::class, 'portfolio-details']);

//Auth
Route::get('/login ', [AuthController::class, 'login'])->name('login');
Route::post('/login ', [AuthController::class, 'authenticated']);
Route::post('/logout ', [AuthController::class, 'logout']);

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('sliders', SliderController::class)->middleware('auth');

<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MajorsController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/majors', [MajorsController::class, 'index']);
Route::get('/doctors', [DoctorsController::class, 'index']);
Route::get('/doctor', [DoctorController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/history', [HistoryController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/send-message', [ContactController::class, 'sendMessage']);
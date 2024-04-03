<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\educational_attainmentController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\UserController;
use App\Models\Educational_attainment;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);
Route::resource('abouts', aboutController::class);
Route::resource('skills', skillController::class);
Route::resource('educational_attainments', educational_attainmentController::class);
Route::resource('/', FrontEndController::class);

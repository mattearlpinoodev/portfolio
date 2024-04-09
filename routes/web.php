<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\blogsController;
use App\Http\Controllers\contactsController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\educational_attainmentController;
use App\Http\Controllers\experienceController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\webinarController;
use App\Http\Controllers\worksController;
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

Route::middleware(['checkRole:admin'])->group(function () { 
    
    

});
Route::resource('users', UserController::class);
Route::resource('abouts', aboutController::class);
Route::resource('skills', skillController::class);
Route::resource('educational_attainments', educational_attainmentController::class);
Route::resource('experiences', experienceController::class);
Route::resource('blogs', blogsController::class);
Route::resource('webinars', webinarController::class);
Route::resource('works', worksController::class);
Route::resource('contacts', contactsController::class);
Route::resource('/', FrontEndController::class);


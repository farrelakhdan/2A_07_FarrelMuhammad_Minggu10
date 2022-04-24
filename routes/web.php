<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
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

//TUGAS BIODATA

Route::get('home', [HomeController::class, 'index']);
Route::get('about', [AboutController::class, 'show'])->name('about');
Route::get('/', [LoginController::class, 'show']);
Route::get('contact', [ContactController::class, 'index']);
Route::get('work', [WorkController::class, 'index']);

Route::get('login', [LoginController::class, 'show'])->name('login');
Route::post('LoginHome', [LoginController::class, 'index']);

//Admin
Route::get('admin', [AdminController::class, 'index'])->name('admin');
Route::get('adminLogout', [AdminController::class, 'logout']);
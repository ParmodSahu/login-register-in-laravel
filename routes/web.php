<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/',[UserController::class,'dashboard']);
Route::get('login',[UserController::class,'login'])->name('login');
Route::post('checkUser',[UserController::class,'checkUser'])->name('checkUser');
Route::get('register',[UserController::class,'register'])->name('register');
Route::post('registerUser',[UserController::class,'registerUser'])->name('registerUser');
Route::get('dashboard',[UserController::class,'dashboard'])->name('dashboard');
Route::get('logout',[UserController::class,'logout'])->name('logout');


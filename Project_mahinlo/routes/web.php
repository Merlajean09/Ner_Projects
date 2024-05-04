<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
}); 
Route::get('/home', [LoginController::class, 'home']);
Route::get('/user', [LoginController::class, 'user']);
Route::get('/post', [LoginController::class, 'post']);
Route::get('/dashboard', [LoginController::class, 'dashboard']);
Route::get('/welcome', [LoginController::class, 'welcome']);

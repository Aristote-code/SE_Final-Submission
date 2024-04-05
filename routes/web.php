<?php

use App\Http\Controllers\CustomController;
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

Route::get('/', [CustomController::class, 'signin'])->name('signin');
Route::post('/signin', [CustomController::class, 'login'])->name('signin.post');
Route::get('/signup', [CustomController::class, 'signup'])->name('signup');
Route::post('/signup', [CustomController::class, 'register'])->name('signup.post');
Route::get('/chat', [CustomController::class, 'chat'])->name('chat');
Route::post('/logout', [CustomController::class, 'logout'])->name('logout');

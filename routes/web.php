<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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

Route::get('/', [PageController::class, 'homepage']);
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/profile', [PageController::class, 'profile']);
Route::get('/settings', [PageController::class, 'settings']);

Route::resource('posts', PostController::class);

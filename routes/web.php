<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
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

Route::get('/', [EventController::class, 'events']);
Route::get('/events', [EventController::class, 'events']);
Route::get('/event/{id}/applications', [ApplicationController::class, 'list'])->middleware('auth');
Route::get('/event/{id}', [EventController::class, 'show'])->middleware('auth');
Route::post('/event/{id}', [ApplicationController::class, 'create'])->middleware('auth');

Route::get('/register', function () {
    return view('register');
})->middleware('guest');

Route::get('/login', function () {
    return view('login');
})->middleware('guest')->name('login');

Route::post('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/login', [UserController::class, 'login'])->middleware('guest');

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/events/create', function () {
    return view('create');
})->middleware('admin');

Route::post('/events/create', [EventController::class, 'create'])->middleware('admin');

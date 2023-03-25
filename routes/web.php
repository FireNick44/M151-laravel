<?php

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

Route::get('/', [\App\Http\Controllers\EventController::class, 'events']);
Route::get('/events', [\App\Http\Controllers\EventController::class, 'events']);
Route::get('/event/{id}/applications', [\App\Http\Controllers\ApplicationController::class, 'list']);
Route::get('/event/{id}', [\App\Http\Controllers\EventController::class, 'show']);
Route::post('/event/{id}', [\App\Http\Controllers\ApplicationController::class, 'create']);

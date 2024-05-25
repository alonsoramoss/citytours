<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('users', [App\Http\Controllers\UserController::class, 'index']);
Route::get('users/create', [App\Http\Controllers\UserController::class, 'create']);
Route::post('users/create', [App\Http\Controllers\UserController::class, 'store']);
Route::get('users/{id}/edit', [App\Http\Controllers\UserController::class, 'edit']);
Route::put('users/{id}/edit', [App\Http\Controllers\UserController::class, 'update']);
Route::get('users/{id}/delete', [App\Http\Controllers\UserController::class, 'destroy']);


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







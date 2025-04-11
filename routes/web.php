<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('users', [App\Http\Controllers\UserController::class, 'index']);
    Route::get('users/create', [App\Http\Controllers\UserController::class, 'create']);
    Route::post('users', [App\Http\Controllers\UserController::class, 'store']);
    Route::get('users/{id}/edit', [App\Http\Controllers\UserController::class, 'edit']);
    Route::put('users/{id}', [App\Http\Controllers\UserController::class, 'update']);
    Route::delete('users/{id}', [App\Http\Controllers\UserController::class, 'destroy']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();

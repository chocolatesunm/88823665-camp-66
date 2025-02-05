<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


Route::get('/',
    [HomeController::class, 'index']);

Route::get(
    '/login',
    [LoginController::class, 'index']
);

Route::get(
    '/home',
    [HomeController::class, 'index']
);

Route::delete(
    '/users',
    [UserController::class, 'delete']
);

Route::put(
    '/users',
    [UserController::class, 'edit_action']
);

Route::get(
    '/users/{id}',
    [UserController::class, 'edit']
);

Route::get(
    '/register',
    [RegisterController::class, 'index']
);
Route::post(
    '/register',
    [RegisterController::class, 'Create']
);
Route::get(
    '/users',
    [UserController::class, 'index']
);
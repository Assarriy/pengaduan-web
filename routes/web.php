<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [UserController::class, 'index'])->name('ereporthub.index');

Route::get('/register', [UserController::class, 'formRegister'])->name('ereporthub.register');

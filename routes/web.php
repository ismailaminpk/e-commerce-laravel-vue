<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Auth\AuthController as AuthAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/login', function () {
    return view('auth.signIn');
});

Route::get('/admin-create', [AuthController::class, 'createAdmin'])->name('admin.create');

Route::post('login-user', [AuthAuthController::class, 'loginUser'])->name('user.login');

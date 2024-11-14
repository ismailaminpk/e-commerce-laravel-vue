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

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/login', function () {
    return view('auth.signIn');
});

Route::get('/admin-create', ['AuthController@createAdmin'])->name('admin.create');

Route::post('login-user', ['Auth\AuthController@loginUser'])->name('user.login');

<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('admin.index');
// });

Route::get('/login', function () {
    return view('auth.signIn');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::get('/admin-create', [AdminAuthController::class, 'createAdmin'])->name('admin.create');

Route::post('login-user', [AuthController::class, 'loginUser'])->name('user.login');

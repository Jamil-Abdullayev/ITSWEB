<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogsController;



Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['web', 'auth', 'can:view-dashboard']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('home');
    Route::redirect('/admin','/dashboard');
    Route::redirect('/','/dashboard');

    Route::resource('/users',UserController::class);
    Route::resource('/blogs',BlogsController::class);
});

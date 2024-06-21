<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\SettingController;



Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['web', 'auth', 'can:view-dashboard']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('home');
    Route::redirect('/admin','/dashboard');
    Route::redirect('/','/dashboard');

    Route::resource('admin/users',UserController::class);
    Route::resource('admin/blogs',BlogsController::class);

    //General Contnent
    Route::get('admin/benefits',[ContentController::class,'benefitsView'])->name('benefits-view');
    Route::post('admin/benefits',[ContentController::class,'benefitsStore'])->name('benefits-store');

    Route::get('admin/work-principles',[ContentController::class,'principlesView'])->name('work-principles-view');
    Route::post('admin/work-principles',[ContentController::class,'principlesStore'])->name('work-principles-store');

    //Same Type Pages
    Route::get('admin/same-type-pages/{keyword}', [ContentController::class, 'sameTypeContentView'])->name('same-type-content');
    Route::post('admin/same-type-pages/{keyword}', [ContentController::class, 'sameTypeContentStore'])->name('same-type-content-store');

    //Site Main Settings
    Route::get('admin/site-main-settings', [SettingController::class, 'mainSettingsView'])->name('site-main-settings');
    Route::post('admin/site-main-settings', [SettingController::class, 'mainSettingsStore'])->name('site-main-settings-store');

});

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
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Session;


// ADMIN CONTENT MANAGEMENT DASHBOARD

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['web', 'auth', 'can:view-dashboard']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('home');
    Route::redirect('/admin','/dashboard');
//    Route::redirect('/','/dashboard');

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

    //About Page Settings
    Route::get('admin/about',[ContentController::class,'aboutUsView'])->name('about-view');
    Route::post('admin/about',[ContentController::class,'aboutUsStore'])->name('about-store');


});


// SITE SIDE ROUTES

Route::get('/',[SiteController::class,'home'])->name('site-home');
Route::post('/change-language',[SiteController::class,'changeLanguage'])->name('site-change-language');
Route::get('/services',[SiteController::class,'services'])->name('site-services');
Route::get('/about',[SiteController::class,'about'])->name('site-about');
Route::get('/pricing',[SiteController::class,'pricings'])->name('site-pricing');
Route::get('/faq',[SiteController::class,'faqs'])->name('site-faq');
Route::get('/blogs',[SiteController::class,'blogs'])->name('site-blogs');
Route::get('/blog-detail/{id}',[SiteController::class,'blogsDetail'])->name('site-blog-detail');
Route::get('/contact',[SiteController::class,'contact'])->name('site-contact');

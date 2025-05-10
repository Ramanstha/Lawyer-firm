<?php

use Illuminate\Support\Facades\Route;


Route::get('/flyway-admin-login',[App\Http\Controllers\Auth\LoginController::class,'showLoginForm'])->name('login');
Route::post('/flyway-admin-post-login',[App\Http\Controllers\Auth\LoginController::class,'login'])->name('login.perform');

// Route::middleware(['auth'])->group(function () {
    
Route::get('/admin',[App\Http\Controllers\Backend\DashboardController::class,'index'])->name('dashboard');
Route::get('/logout',[App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

//////////Site Setting//////////
Route::get('/sitesetting',[App\Http\Controllers\Backend\SitesettingController::class,'Sitesetting'])->name('create.sitesetting');
Route::post('/sitesetting-store',[App\Http\Controllers\Backend\SitesettingController::class,'Store'])->name('store.sitesetting');
Route::get('/sitesetting-view',[App\Http\Controllers\Backend\SitesettingController::class,'View'])->name('view.sitesetting');
Route::get('/sitesetting-edit/{id}',[App\Http\Controllers\Backend\SitesettingController::class,'Edit'])->name('edit.sitesetting');
Route::post('/sitesetting-update/{id}',[App\Http\Controllers\Backend\SitesettingController::class,'Update'])->name('update.sitesetting');
Route::get('/sitesetting-delete/{id}',[App\Http\Controllers\Backend\SitesettingController::class,'Delete'])->name('delete.sitesetting');
Route::get('/sitesetting-status',[App\Http\Controllers\backend\SitesettingController::class,'Status'])->name('status.sitesetting');

//////////Banner//////////
Route::get('/banner',[App\Http\Controllers\Backend\BannerController::class,'banner'])->name('create.banner');
Route::post('/banner-store',[App\Http\Controllers\Backend\BannerController::class,'Store'])->name('store.banner');
Route::get('/banner-view',[App\Http\Controllers\Backend\BannerController::class,'View'])->name('view.banner');
Route::get('/banner-edit/{id}',[App\Http\Controllers\Backend\BannerController::class,'Edit'])->name('edit.banner');
Route::post('/banner-update/{id}',[App\Http\Controllers\Backend\BannerController::class,'Update'])->name('update.banner');
Route::get('/banner-delete/{id}',[App\Http\Controllers\Backend\BannerController::class,'Delete'])->name('delete.banner');
Route::get('/banner-status',[App\Http\Controllers\backend\BannerController::class,'Status'])->name('status.banner');

// });  


// Frontend Routes

Route::get('/',[App\Http\Controllers\Frontend\HomepageController::class,'Home'])->name('Home');
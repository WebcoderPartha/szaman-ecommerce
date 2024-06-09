<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;



Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->group(function (){

    Route::controller(LoginController::class)->group(function (){
        Route::get('/login', 'login_form')->name('admin.login');
    });

    Route::controller(DashboardController::class)->group(function (){
       Route::get('/dashboard', 'dashboard_view')->name('backend.dashboard');
    });

    // Category Controller
    Route::controller(CategoryController::class)->prefix('category')->group(function (){
        Route::get('/', 'index')->name('backend.category.index');
        Route::get('/{id}/edit', 'index')->name('backend.category.edit');
        Route::post('/store', 'category_store')->name('backend.category.store');
    });


});


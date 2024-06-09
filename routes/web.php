<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\DashboardController;



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
});


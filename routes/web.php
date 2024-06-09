<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginController;

Route::controller(LoginController::class)->group(function (){
    Route::get('/admin/login', 'login_form')->name('admin.login');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard' , function (){
    return view('backend.dashboard');
})->name('backend.dashboard');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubcategoryController;
use App\Http\Controllers\Backend\BrandController;



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
        Route::get('/{id}/edit', 'edit')->name('backend.category.edit');
        Route::post('/store', 'category_store')->name('backend.category.store');
        Route::get('/get-category-data', 'get_category_data')->name('backend.category.data');
        Route::put('/{id}/update', 'update_category')->name('backend.category.update');
        Route::get('/{id}/delete', 'destroy')->name('backend.category.destroy');
    });

    // Subcategory Controller
    Route::controller(SubcategoryController::class)->prefix('subcategory')->group(function (){
        Route::get('/', 'index')->name('backend.subcategory.index');
        Route::get('/{id}/edit', 'edit')->name('backend.subcategory.edit');
        Route::post('/store', 'subcategory_store')->name('backend.subcategory.store');
        Route::get('/get-subcategory-data', 'get_subcategory_data')->name('backend.subcategory.data');
        Route::put('/{id}/update', 'update_subcategory')->name('backend.subcategory.update');
        Route::get('/{id}/delete', 'destroy')->name('backend.subcategory.destroy');
    });

    // Subcategory Controller
    Route::controller(BrandController::class)->prefix('brand')->group(function (){
        Route::get('/', 'index')->name('backend.brand.index');
        Route::get('/{id}/edit', 'edit')->name('backend.brand.edit');
        Route::post('/store', 'brand_store')->name('backend.brand.store');
        Route::get('/get-brand-data', 'get_brand_data')->name('backend.brand.data');
        Route::put('/{id}/update', 'update_brand')->name('backend.brand.update');
        Route::get('/{id}/delete', 'destroy')->name('backend.brand.destroy');
    });


});


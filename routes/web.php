<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubcategoryController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\AttributeController;
use App\Http\Controllers\Backend\ProductController;



Route::get('/', function () {
    return view('welcome');
});


Route::controller(LoginController::class)->group(function (){
    Route::get('/admin/login', 'login_form')->name('admin.form');
    Route::post('/admin/login', 'login')->name('admin.login');
});

Route::middleware('admin')->prefix('/admin')->group(function (){

    // Dashboard Controller
    Route::controller(DashboardController::class)->group(function (){
       Route::get('/dashboard', 'dashboard_view')->name('backend.dashboard');
    });

    Route::controller(ProfileController::class)->prefix('profile')->group(function (){
        Route::get('/change-password', 'change_password_view')->name('backend.admin.change-password');
        Route::post('/change-password', 'update_change_password')->name('backend.admin.update-change-password');
        Route::get('/update-profile', 'edit_profile_view')->name('backend.admin.edit_profile');
        Route::post('/update-profile', 'update_edit_profile_view')->name('backend.admin.update_profile');
        Route::get('/logout', 'admin_logout')->name('backend.admin.logout');
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

    // Attribute Controller
    Route::controller(AttributeController::class)->prefix('attribute')->group(function (){
        Route::get('/', 'attribute_view')->name('backend.attribute.index');
        Route::post('/store', 'attribute_store')->name('backend.attribute.store');
        Route::get('/get-data', 'attribute_data')->name('backend.attribute.getdata');
        Route::get('/destroy/{id}', 'destroy')->name('backend.attribute.destroy');
        Route::get('/{id}/edit', 'attribute_edit')->name('backend.attribute.edit');
        Route::post('/{id}/update', 'attribute_update')->name('backend.attribute.update');
    });

    // Product Controller
    Route::controller(ProductController::class)->prefix('product')->group(function (){
        Route::get('/', 'index')->name('backend.product.index');
        Route::get('/create', 'create')->name('backend.product.create');
        Route::post('/store', 'store')->name('backend.product.store');
        Route::get('/get-data', 'product_data')->name('backend.product.getdata');
        Route::get('/destroy/{id}', 'destroy')->name('backend.product.destroy');
        Route::get('/{id}/edit', 'edit')->name('backend.product.edit');
        Route::put('/{id}/update', 'update')->name('backend.product.update');
    });

});


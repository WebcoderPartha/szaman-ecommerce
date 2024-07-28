<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mobile\HomeController;
use App\Http\Controllers\Mobile\CustomerAuthController;


Route::controller(HomeController::class)->group(function (){
   Route::get('/homelatestproduct', 'homeLatestProducts');
   Route::get('/singleproduct/{id}', 'product_detail');
   Route::get('/homeslider', 'home_slider');
   Route::get('/getcategory', 'get_category');
   Route::get('/getbrand', 'get_brand');
   Route::get('/getshippingcharge', 'shipping_charge');
});

// Add more mobile-specific routes here

Route::controller(CustomerAuthController::class)->group(function () {
    Route::post('/customer/login', 'login');
    Route::post('/customer/register', 'register');
});

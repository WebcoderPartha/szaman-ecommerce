<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mobile\HomeController;
use App\Http\Controllers\Mobile\CustomerAuthController;
use App\Http\Controllers\Mobile\CheckoutController;
use App\Http\Controllers\Mobile\AppOrderController;


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

// Checkout Controller
Route::controller(CheckoutController::class)->group(function () {
    Route::get('/checkout/get-address/{user_id}', 'get_customer_address');
    Route::post('/checkout/address/store/{user_id}', 'update_customer_address');
});

// App Order Controller
Route::controller(AppOrderController::class)->group(function () {
    Route::post('/cod-order', 'cod_order');
});

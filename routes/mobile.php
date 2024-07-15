<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mobile\HomeController;


Route::controller(HomeController::class)->group(function (){
   Route::get('/homelatestproduct', 'homeLatestProducts');
   Route::get('/singleproduct/{id}', 'product_detail');
});

// Add more mobile-specific routes here

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
use App\Http\Controllers\Backend\ShiftChargeController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserLoginController;
use App\Http\Controllers\Frontend\FrontendCartController;
use App\Http\Controllers\Frontend\FrontendProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\FtdOrderController;
use App\Http\Controllers\Frontend\OnlinePaymentController;

// SSLCOMMERZ Start
//Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
//Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [OnlinePaymentController::class, 'index'])->name('online.payment');

Route::post('/success', [OnlinePaymentController::class, 'success']);
Route::post('/fail', [OnlinePaymentController::class, 'fail']);
Route::post('/cancel', [OnlinePaymentController::class, 'cancel']);

Route::post('/ipn', [OnlinePaymentController::class, 'ipn']);
//SSLCOMMERZ END




// Add To cart
Route::controller(CartController::class)->group(function (){
    Route::get('/getcartitems', 'getCartContent')->name('frontend.getcarts');
    Route::post('/addtocart', 'add_to_cart')->name('frontend.addtocart');
    Route::post('/updatecart', 'updateCart')->name('frontend.updatecart');
    Route::post('/removecart', 'cartRemove')->name('frontend.removecart');
    Route::post('/shippingcharge', 'addShippingCharge')->name('frontend.shippingadd');
});

// Order Controller
Route::controller(FtdOrderController::class)->group(function (){
    Route::post('/cod-order-now', 'cod_order_now')->name('frontend.cod.ordernow');
});

// Frontend
Route::controller(HomeController::class)->group(function (){
    Route::get('/', 'home_page')->name('frontend.home_page');
});

Route::controller(FrontendProductController::class)->group(function (){
    Route::get('/product/{slug}', 'detail_page')->name('frontend.product.details');
});

// Cart Controller
Route::controller(FrontendCartController::class)->group(function (){
    Route::get('/cart/view', 'cart_view')->name('frontend.cart_view');
    Route::get('/checkout', 'checkout_view')->name('frontend.checkout_view');
});

Route::controller(UserLoginController::class)->group(function () {
    Route::get('/auth/login', 'user_login_page')->name('user_login_page');
    Route::get('/forget-password', 'user_forget_password')->name('user.forget.password');
    Route::post('/auth/userregister', 'customer_register')->name('user.register.post');
    Route::get('/logout', 'customer_logout')->name('customer.logout');
    Route::post('/customer-login', 'customer_login')->name('customer.login');
    Route::post('cus-address/update', 'update_customer_address')->name('update.customer.address');
    Route::get('cus-address/get', 'get_customer_address')->name('get.customer.address');
});

// Admin Login
Route::controller(LoginController::class)->group(function (){
    Route::get('/admin/login', 'login_form')->name('admin.form');
    Route::post('/admin/login', 'login')->name('admin.login');
});


// Backend
Route::middleware('admin')->prefix('/admin')->group(function (){

    Route::get('/', function (){
       return redirect()->route('backend.dashboard');
    });

    // Order Controller
    Route::controller(OrderController::class)->prefix('order')->group(function (){
        Route::get('/index', 'index')->name('backend.order.index');
        Route::get('/get-order-data', 'get_order_data')->name('backend.order.data');
        Route::get('/{id}/view', 'view_single_order')->name('backend.order.single.view');
    });

    // Customer Controller
    Route::controller(CustomerController::class)->prefix('customer')->group(function (){
        Route::get('/index', 'customer_index')->name('backend.customer.index');
        Route::get('/edit/{id}', 'customer_edit')->name('backend.customer.edit');
        Route::get('/get-customer-data', 'get_customer_data')->name('backend.customer.data');
        Route::put('/update/{id}', 'customer_update')->name('backend.customer.update');
        Route::get('/status/{id}', 'active_inactive')->name('backend.customer.status');
    });

    // Dashboard Controller
    Route::controller(DashboardController::class)->group(function (){
       Route::get('/dashboard', 'dashboard_view')->name('backend.dashboard');
    });

    // Slider Controller
    Route::controller(SliderController::class)->prefix('slider')->group(function (){
        Route::get('/', 'index')->name('backend.slider.index');
        Route::get('/{id}/edit', 'edit')->name('backend.slider.edit');
        Route::put('/{id}/update', 'update')->name('backend.slider.update');
        Route::get('/{id}/delete', 'destroy')->name('backend.slider.destroy');
        Route::post('/store', 'store')->name('backend.slider.store');
        Route::get('/get-slider-data', 'get_slider_data')->name('backend.slider.data');
    });

    // Profile Controller
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

    // Shipping Charge Controller
    Route::controller(ShiftChargeController::class)->prefix('shipping-charge')->group(function (){
        Route::get('/', 'index')->name('backend.shipping-charge.index');
        Route::get('/get-shipping-charge', 'get_shipping_data')->name('backend.shipping-charge.data');
        Route::get('/{id}/edit', 'edit')->name('backend.shipping-charge.edit');
        Route::get('/destroy/{id}', 'destroy')->name('backend.shipping-charge.destroy');
        Route::put('/{id}/update', 'update')->name('backend.shipping-charge.update');
        Route::post('/store', 'shipping_charge_store_or_update')->name('backend.shipping-charge.store');
    });

});

Route::get('/clear-cache', function() {
    Artisan::call('optimize:clear');
    return redirect()->route('frontend.home_page');
});

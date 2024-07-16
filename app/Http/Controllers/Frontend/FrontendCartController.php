<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingCharge;

class FrontendCartController extends Controller
{
    public function cart_view(){
        return view('frontend.cart');
    }

    public function checkout_view(){
        $shipping_charge = ShippingCharge::all();
        return view('frontend.checkout', compact('shipping_charge'));
    }
}

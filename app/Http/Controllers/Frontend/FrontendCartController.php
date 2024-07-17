<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingCharge;
use Gloudemans\Shoppingcart\Facades\Cart;

class FrontendCartController extends Controller
{
    public function cart_view(){
       if (Cart::instance('shopping')->content()->count() > 0) {
           return view('frontend.cart');
       }else{
           return redirect()->route('frontend.home_page');
       }
    }

    public function checkout_view(){
        if (Cart::instance('shopping')->content()->count() > 0){
            $shipping_charge = ShippingCharge::all();
            return view('frontend.checkout', compact('shipping_charge'));
        }else {
            return redirect()->route('frontend.home_page');
        }

    }
}

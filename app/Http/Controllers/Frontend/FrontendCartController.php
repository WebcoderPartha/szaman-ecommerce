<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendCartController extends Controller
{
    public function cart_view(){
        return view('frontend.cart');
    }

    public function checkout_view(){
        return view('frontend.checkout');
    }
}

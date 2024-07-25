<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class FtdOrderController extends Controller
{

    public function order_now(Request $request){



        $cart = Cart::instance('shopping')->content();
        return response()->json($cart);
    }

}

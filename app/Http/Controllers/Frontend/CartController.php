<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{


    public function getCartContent(){
        $cart = Cart::instance('shopping')->content();
        $quantity = Cart::instance('shopping')->count();
        $subtotal = Cart::instance('shopping')->subtotal();
        return response()->json(['cart' => $cart, 'total_qty' => $quantity, 'subtotal' => $subtotal], 200);
    }

    public function add_to_cart(Request $request){
        $product = Product::where('id', $request->product_id)->first();
        $price = $product->discount !== null ? $product->discount_price  : $product->unit_price;
        Cart::instance('shopping')->add($request->product_id, $product->title, $request->quantity, $price, ['image' => $product->feature_image]);
        return response()->json(['success' => 'Add to cart successfully'],200);
    }

    public function updateCart(Request $request){
        $cart = Cart::instance('shopping')->update($request->rowId, ['qty' =>$request->qty]);
        return response()->json(['success' => 'Cart is updated!'], 200);
    }

    public function cartRemove(Request $request){
        $cart = Cart::instance('shopping')->remove($request->rowId);
        return response()->json(['success' => 'Cart item has been removed!'], 200);
    }



}

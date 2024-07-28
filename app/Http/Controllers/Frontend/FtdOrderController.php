<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class FtdOrderController extends Controller
{

    public function order_now(Request $request){

        //============ Order ========================//
        $order = new Order();
        $order->user_id = 1;
//        $order->order_number = IdGenerator::generate(['table' => 'orders', 'field' => 'order_number', 'length' => 8, 'prefix' => 'WC']);
        $order->transaction_id = str()->random(20);;

        // Remove the comma
        $numberWithoutComma = str_replace(",", "", Cart::instance('shopping')->subtotal());
        // Convert the string to a float
        $floatNumber = floatval($numberWithoutComma);
        // Convert the float to an integer (optional, if you want an integer)
        $integerNumber = intval($floatNumber);
        $order->payable_amount = $integerNumber;

        $order->payment_date = date('Y-m-d');
        $order->order_date = date('Y-m-d');
        $order->payment_status = 0;
        $order->save();
        //============ Order ==========================//

        //=============== Order Detail ================//
        $carts = Cart::instance('shopping')->subtotal();

        foreach ($carts as $cart){
            $order_details = new OrderDetail;
            $order_details->order_id = $order->id;
            $order_details->product_name = $cart->name;
            $order_details->qty = $cart->qty;
//            $order_details->variation = $order->id;
            $order_details->price = $cart->price;
            $order_details->subtotal = $cart->subtotal;
            $order_details->save();
        }


        //=============== Order Detail ================//

        $cart = count(Cart::instance('shopping')->content());


        return response()->json($cart);
    }

}

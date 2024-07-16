<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ShippingCharge;
use Illuminate\Http\Request;

class ShiftChargeController extends Controller
{
    public function index(){

        return view('backend.shipping-charge.index');
    }

    public function shipping_charge_store_or_update(Request $request){
        $validate= $request->validate([
            'shipping_charge_name' => 'required',
            'amount' => 'required|numeric'
        ]);


        $shipping_charge = new ShippingCharge();
        $shipping_charge->shipping_charge_name = $request->shipping_charge_name;
        $shipping_charge->amount = $request->amount;
        $shipping_charge->save();

        toastr()->success('Data inserted successfully!', 'Success');
        return redirect()->back();

    }

}

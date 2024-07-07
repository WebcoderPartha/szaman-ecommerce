<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ShippingCharge;
use Illuminate\Http\Request;

class ShiftChargeController extends Controller
{
    public function index(){
        $shipping_charge = ShippingCharge::find(1);
        return view('backend.attribute.shipping-charge.index', compact('shipping_charge'));
    }

    public function shipping_charge_store_or_update(Request $request){
        $validate= $request->validate([
            'inside_dhaka' => 'required|numeric',
            'outside_dhaka' => 'required|numeric'
        ]);

        $shipping_charge_id = $request->shipping_charge_id;
        $exist_shipping_charge = ShippingCharge::find($shipping_charge_id);

        if ($exist_shipping_charge){
            $exist_shipping_charge->inside_dhaka = $request->inside_dhaka;
            $exist_shipping_charge->outside_dhaka = $request->outside_dhaka;
            $exist_shipping_charge->save();
        }else{
            $shipping_charge = new ShippingCharge();
            $shipping_charge->inside_dhaka = $request->inside_dhaka;
            $shipping_charge->outside_dhaka = $request->outside_dhaka;
            $shipping_charge->save();
        }
        toastr()->success('Shipping charges updated successfully!', 'Success');
        return redirect()->back();

    }

}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sslcommerze;

class SettingController extends Controller
{
    public function sslcommerz_view(){
        $sslcommerz = Sslcommerze::find(1);

        return view('backend.setting.sslcommerz', compact('sslcommerz'));
    }

    public function update_or_insert(Request $request){

        $sslcommerz = Sslcommerze::find(1);

        if ($sslcommerz){
            $sslcommerz->store_id       = $request->store_id;
            $sslcommerz->store_password = $request->store_password;
            $sslcommerz->is_live        = $request->is_live;
            $sslcommerz->save();
        }else {
            $sslcommerz = new Sslcommerze();
            $sslcommerz->store_id       = $request->store_id;
            $sslcommerz->store_password = $request->store_password;
            $sslcommerz->is_live        = $request->is_live;
            $sslcommerz->save();
        }

        toastr()->success('Info is updated!', 'Success!');
        return redirect()->back();

     }

}

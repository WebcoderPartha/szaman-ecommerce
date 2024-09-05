<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderTrackingController extends Controller
{
    public function order_tracking_page(){
        return view('frontend.order_tracking_page');
    }

}

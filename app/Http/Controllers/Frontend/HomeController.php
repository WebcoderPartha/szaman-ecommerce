<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class HomeController extends Controller
{

    public function home_page(){
        $sliders = Slider::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('frontend.homepage', compact('sliders'));
    }

}

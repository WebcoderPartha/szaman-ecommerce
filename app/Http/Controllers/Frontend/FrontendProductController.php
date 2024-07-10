<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendProductController extends Controller
{

//    public function getProducts(){
//        $products = Product::where('is_publish', 1)->where('is_active', 1)->orderBy('id', 'DESC')->get();
//
//    }

    public function detail_page($slug){
        $product = Product::with('gallery')->where('slug', $slug)->where('is_publish', 1)->where('is_active', 1)->first();
        return view('frontend.product_details', compact('product'));
    }


}

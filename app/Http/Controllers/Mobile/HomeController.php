<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeLatestProducts(){

        $products = Product::with('category', 'sub_category', 'brand', 'gallery', 'variation')->where('is_publish', 1)->where('is_active', 1)->orderBy('id', 'DESC')->get();

        return response()->json($products, 200);

    }

    public function product_detail($id){

        $product = Product::with('category', 'sub_category', 'brand', 'gallery', 'variation')->where('id', $id)->where('is_publish', 1)->where('is_active', 1)->first();
        return response()->json($product, 200);

    }

    public function home_slider(){
        $slider = Slider::where('status', 1)->orderBy('id', 'DESC')->get();
        return response()->json($slider, 200);
    }

}

<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShippingCharge;
use App\Models\Slider;
use App\Models\Sslcommerze;
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

    public function get_category(){
        $category = Category::select('name', 'image')->get();
        return response()->json($category, 200);
    }

    public function get_brand(){
        $brand = Brand::select('name', 'image')->get();
        return response()->json($brand, 200);
    }

    public function shipping_charge(){
        $shipping_charge = ShippingCharge::orderBy('id', 'ASC')->get();
        return response()->json($shipping_charge, 200);
    }


    public function get_sslcredential(){
        $sslcommerz = Sslcommerze::find(1);
        return response()->json($sslcommerz, 200);
    }

}

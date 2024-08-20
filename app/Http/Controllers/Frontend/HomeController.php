<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{

    public function home_page(){
        $feature_products = Product::where('feature_product', 1)->where('is_publish', 1)->where('is_active', 1)->get();
        $products = Product::where('is_publish', 1)->where('is_active', 1)->orderBy('id', 'DESC')->get();
        $sliders = Slider::where('status', 1)->orderBy('id', 'DESC')->get();

        $category_wish_products = Category::orderBy('id', 'ASC')->get();

        foreach ($category_wish_products as $category) {
            $category->products = $category->product()->take(8)->get();
        }

        return view('frontend.homepage', compact('sliders', 'products', 'category_wish_products', 'feature_products'));
    }

}

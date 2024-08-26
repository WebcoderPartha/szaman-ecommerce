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

//        $product = Product::with('gallery')->where('slug', $slug)->where('is_publish', 1)->where('is_active', 1)->first();
//        $related_products = Product::where('category_id', $product->category_id)->get();
//        return view('frontend.product_details', compact('product', 'related_products'));

        // Fetch the product along with its gallery based on the slug
        $product = Product::with('gallery')->where('slug', $slug)
            ->where('is_publish', 1)
            ->where('is_active', 1)
            ->first();

        // If the product is not found, you can handle it accordingly
        if (!$product) {
            abort(404, 'Product not found');
        }

        // Fetch related products based on category and partial title match
        $related_products = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id) // Exclude the current product
            ->where('is_publish', 1)
            ->where('is_active', 1)
//            ->where('title', 'LIKE', '%' . $product->title . '%') // Partial title match
            ->take(6) // Limit the number of related products (optional)
            ->get();

        // Return the view with product and related products
        return view('frontend.product_details', compact('product', 'related_products'));
    }


}

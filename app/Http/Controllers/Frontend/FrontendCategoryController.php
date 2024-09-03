<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class FrontendCategoryController extends Controller
{
    public function category_page($slug){
        $category_products = Category::with('product')->where('slug', $slug)->first();
        if ($category_products){
            return view('frontend.category-page', compact('category_products'));
        }else{
            toastr()->error('Page doesn\'t exist!', 'Error!');
            return redirect()->route('frontend.home_page');
        }
    }

    public function sub_category_page($category_slug, $subcat_slug){

        $subcategory_products = Subcategory::with('product', 'category')->where('slug', $subcat_slug)->first();

        if ($subcategory_products){
            return view('frontend.subcategory-page', compact('subcategory_products'));
        }else{
            toastr()->error('Page doesn\'t exist!', 'Error!');
            return redirect()->route('frontend.home_page');
        }


    }

}

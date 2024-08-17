<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryProductController extends Controller
{

    public function get_category_product(){
        $categories = Category::with('product')->orderBy('id', 'ASC')->get();
        return $categories;
    }

}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.product.index');
    }

    public function product_data(){

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        $attributes = Attribute::all();
        return view('backend.product.create', compact('categories', 'subcategories', 'brands', 'attributes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string'
        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->brand_id = $request->brand_id;
        $product->unit_price = $request->unit_price;
        $product->discount = $request->discount;
        $product->discount_price = $request->discount_price;

        if ($request->file('feature_image')){
            $file = $request->file('feature_image');
            $image = 'product'.'-'.time().'.'.$file->getClientOriginalExtension();

            // check post directory slider is exists
            if(!Storage::disk('public')->exists('gallery')){
                Storage::disk('public')->makeDirectory('gallery');
            }

            $imgResize = Image::make($request->feature_image)->resize('300', '300')->stream();
            Storage::disk('public')->put('gallery/'.$image,$imgResize);

            $product->feature_image = $image;
        }
        $product->feature_product = $request->feature_product;
        $product->hot_deal = $request->hot_deal;
        $product->is_publish = $request->is_publish;
        $product->is_active = $request->is_active;
        $save = $product->save();

        if ($request->file('gallery')){
            if ($save){
                $count = count($request->file('gallery'));

                for ($i = 0; $i < $count; $i++){
                    $file = $request->file('gallery')[$i];
                    $image = 'gallery'.'-'.time().'.'.$file->getClientOriginalExtension();

                    // check post directory slider is exists
                    if(!Storage::disk('public')->exists('gallery')){
                        Storage::disk('public')->makeDirectory('gallery');
                    }

                    $imgResize = Image::make($request->gallery[$i])->resize('300', '300')->stream();
                    Storage::disk('public')->put('gallery/'.$image,$imgResize);

                    $product->feature_image = $image;

                    $gallery = new Gallery();
                    $gallery->product_id = $product->id;
                    $gallery->image = $image;
                    $gallery->save();

                }
            }
        }

        return 'ok';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        return view('backend.product.edit', compact('categories', 'subcategories', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

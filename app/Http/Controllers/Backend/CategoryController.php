<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{

    public function index(){
        return view('backend.category.index');
    }

    public function create(){
        return view('backend.category.create');
    }

    public function edit($id){
        return view('backend.category.edit');
    }


    public function category_store(Request $request){
        $validate = $request->validate([
            'name' => 'required|string'
        ]);

        $category = new Category();
        $category->name = $request->name;

        // If image request
        if ($request->file('image')){
            $file = $request->file('image');
            $image = Str::of(Str::lower($request->name))->slug('-').'-'.time().'.'.$file->getClientOriginalExtension();

            // check post directory slider is exists
            if(!Storage::disk('public')->exists('category')){
                Storage::disk('public')->makeDirectory('category');
            }

            $imgResize = Image::make($request->image)->resize('300', '300')->stream();
            Storage::disk('public')->put('category/'.$image,$imgResize);

            $category->image = $image;
        }

        $category->save();

        Alert::success('Success', 'Data inserted successfully!');

        return redirect()->back();

    }


}

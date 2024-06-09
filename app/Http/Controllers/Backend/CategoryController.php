<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{

    public function index(){
        return view('backend.category.index');
    }

    public function get_category_data(){
        $data = Category::all();

        return Datatables::of($data)
            ->addColumn('punch_id', function ($row){
                if ($row->punch_id !== null){
                    return $row->punch_id;
                }else{
                    return 'N/A';
                }
            })
            ->addColumn('image', function ($row){
                if ($row->image !== null){
                    return '<img src="'.asset('storage/category/'.$row->image).'"  width="50">';
                }else{
                    return '<img src="https://placehold.co/40x40"  width="50">';
                }
            })
            ->addColumn('action', function($row){
                $actionBtn = '<a href="'.route('backend.category.edit', $row->id).'" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })->rawColumns(['punch_id', 'image','action'])->addIndexColumn()->toJson();
    }

    public function create(){
        return view('backend.category.create');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
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

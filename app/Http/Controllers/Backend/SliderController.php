<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.slider.index', compact('sliders'));
    }

    public function get_slider_data(){
        $data = Slider::all();

        return Datatables::of($data)
            ->addColumn('image', function ($row){
                if ($row->image !== null){
                    return '<img src="'.asset('storage/slider/'.$row->image).'"  width="50">';
                }else{
                    return '<img src="https://placehold.co/40x40"  width="50">';
                }
            })
            ->addColumn('action', function($row){
                $actionBtn = '<a href="'.route('backend.slider.edit', $row->id).'" class="edit btn btn-success btn-sm">Edit</a> <a href="#" data-confirm-delete="true" onclick="delete_alert('.$row->id.')" class="btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })->rawColumns(['image','action'])->addIndexColumn()->toJson();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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

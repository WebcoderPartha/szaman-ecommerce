<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\User;
class CustomerController extends Controller
{
    public function customer_index(){
        return view('backend.customer.index');
    }

    public function customer_edit($id){
        $customer = User::find($id);
        return view('backend.customer.edit', compact('customer'));
    }

    public function get_customer_data(){
        $data = User::orderBy('id', 'ASC')->get();

        return Datatables::of($data)
            ->addColumn('name', function ($row){
                return $row->first_name.' '.$row->last_name;
            })->addColumn('address', function ($row){
                if ($row->address !== null){
                    return $row->address;
                }else{
                    return '-';
                }
            })->addColumn('status', function ($row){
                if ($row->status === 1){
                    return '<span class="badge badge-success">Active</span>';
                }else{
                    return '<span class="badge badge-danger">Inactive</span>';
                }
            })->addColumn('action', function($row){
                $actionBtn = '<a href="'.route('backend.product.edit', $row->id).'" class="edit btn btn-success btn-sm">Edit</a> <a href="#" data-confirm-delete="true" onclick="delete_alert('.$row->id.')" class="btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })->rawColumns(['name', 'address', 'status','action'])->addIndexColumn()->toJson();

    }

}

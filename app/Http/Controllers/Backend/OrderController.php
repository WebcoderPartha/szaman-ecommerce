<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Order;

class OrderController extends Controller
{

    public function get_order_data(){
        $data = Order::all();

        return Datatables::of($data)
            ->addColumn('payment_status', function($row){
                if ($row->payment_status == 1){
                    return "<span class='badge badge-info'>Paid</span>";
                }else{
                    return "<span class='badge badge-warning'>Unpaid</span>";
                }
            })->addColumn('action', function($row){
                $actionBtn = '<a href="'.route('backend.category.edit', $row->id).'" class="edit btn btn-success btn-sm">Edit</a> <a href="#" data-confirm-delete="true" onclick="delete_alert('.$row->id.')" class="btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })->rawColumns(['payment_status','action'])->addIndexColumn()->toJson();
    }

    public function index(){
        return view('backend.order.index');
    }

}

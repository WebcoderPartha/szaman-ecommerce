@extends('frontend.layout.app')
@section('title', 'Dashboard | My Account')
@section('content')
    <div class="grid grid-cols-12 py-4 gap-6">
        <div class="col-span-12">
            <h2 class="font-semibold">My Account</h2>
        </div>
        <div class="col-span-3 border border-gray-300 rounded">
            <div class="flex flex-col gap-4 py-4">
                <div class="profile">
                    <div class="profile_pic_content flex flex-col justify-center items-center gap-3">
                        <div class="profile_pic">
                            <img src="https://mohasagor.com/public/frontend/images/user/1.png" alt="" width="150">
                        </div>
                        <div class="profile_name">
                            <h5 class="text-xl text-[#323232] font-semibold">{{ auth('web')->user()->first_name }} {{ auth('web')->user()->last_name }}</h5>
                        </div>
                    </div>
                </div>
                <div class="menu-list ">
                    <ul class="px-4 py-2">
                        <li class="border-b border-b-[#ced4da]">
                            <a href="{{ route('frontend.myaccount.page') }}" class="py-2 text-sm uppercase block hover:text-theme">
                                <i class="fa-solid fa-table-cells-large mr-1"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="border-b border-b-[#ced4da]">
                            <a href="{{ route('frontend.myaccount.view_profile') }}" class="py-2 text-sm uppercase block hover:text-theme">
                                <i class="fa-regular fa-user mr-1"></i>
                                Profile
                            </a>
                        </li>
                        <li class="border-b border-b-[#ced4da]">
                            <a href="{{ route('frontend.myaccount.view_profile.edit') }}" class="py-2 text-sm uppercase block hover:text-theme">
                                <i class="fa-regular fa-pen-to-square mr-1"></i>
                                Edit Profile
                            </a>
                        </li>
                        <li class="border-b border-b-[#ced4da]">
                            <a href="{{ route('frontend.myaccount.change_password') }}" class="py-2 text-sm uppercase block hover:text-theme">
                                <i class="fa-solid fa-key mr-1"></i>
                                Change Password
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 text-sm uppercase block hover:text-theme">
                                <i class="fa-solid fa-right-from-bracket mr-1"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-span-9 border border-gray-300">

            <div class="profile_heading text-center py-4">
                <h3 class="text-2xl font-semibold">All Orders</h3>
            </div>
            <div class="table-responsive px-4">
                <table class="w-full border-collapse border border-slate-700">
                    <thead class="bg-slate-200">
                    <tr>
                        <th class="border border-slate-300 py-1">SL</th>
                        <th class="border border-slate-300 py-1">Invoice No</th>
                        <th class="border border-slate-300 py-1">Order Date</th>
                        <th class="border border-slate-300 py-1">payable_amount</th>
                        <th class="border border-slate-300 py-1">Pay Method</th>
                        <th class="border border-slate-300 py-1">Payment Status</th>
                        <th class="border border-slate-300 py-1">Order Status</th>
                        <th class="border border-slate-300 py-1">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($orders) > 0)
                        @foreach($orders as $key => $order)
                            <tr class="text-center">
                                <td class="border border-slate-300 py-2">{{ $key+1 }}</td>
                                <td class="border border-slate-300 py-2">{{ $order->order_number }}</td>
                                <td class="border border-slate-300 py-2">{{ date('d-F-Y', strtotime($order->order_date)) }}</td>
                                <td class="border border-slate-300 py-2">{{ $order->payable_amount }} Taka</td>
                                <td class="border border-slate-300 py-2">{{ $order->payment_method }}</td>
                                <td class="border border-slate-300 py-2">
                                    @if($order->payment_status == 1)
                                        <span class="bg-green-700 text-white px-4 rounded m-0 pb-1"><small class="m-0">Paid</small></span>
                                    @else
                                        <span class="bg-slate-600 text-white px-4 pb-1 rounded m-0"><small class="m-0">Unpaid</small></span>
                                    @endif
                                </td>
                                <td class="border border-slate-300 py-2">
                                    @if($order->payment_status == 0)
                                        <span class="bg-theme text-white px-4 rounded m-0 pb-1"><small class="m-0">Initiated</small></span>
                                    @elseif($order->payment_status == 1)
                                        <span class="bg-fuchsia-500 text-white px-4 pb-1 rounded m-0"><small class="m-0">Confirmed</small></span>
                                    @elseif($order->payment_status == 2)
                                        <span class="bg-amber-500 text-white px-4 pb-1 rounded m-0"><small class="m-0">Processing</small></span>
                                    @elseif($order->payment_status == 3)
                                        <span class="bg-lime-500 text-white px-4 pb-1 rounded m-0"><small class="m-0">Picked</small></span>
                                    @elseif($order->payment_status == 4)
                                        <span class="bg-teal-500 text-white px-4 pb-1 rounded m-0"><small class="m-0">Shipped</small></span>
                                    @elseif($order->payment_status == 5)
                                        <span class="bg-green-500 text-white px-4 pb-1 rounded m-0"><small class="m-0">Delivered</small></span>
                                    @elseif($order->payment_status == 6)
                                        <span class="bg-red-600 text-white px-4 pb-1 rounded m-0"><small class="m-0">Cancelled</small></span>
                                    @elseif($order->payment_status == 7)
                                        <span class="bg-sky-500 text-white px-4 pb-1 rounded m-0"><small class="m-0">Refunded</small></span>
                                    @else
                                        <span class="bg-rose-500 text-white px-4 pb-1 rounded m-0"><small class="m-0">Returned</small></span>
                                    @endif
                                </td>
                                <td class="border border-slate-300 py-2">Actions</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>

    </script>
@endsection

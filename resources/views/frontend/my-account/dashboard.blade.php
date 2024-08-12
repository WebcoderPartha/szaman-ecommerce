@extends('frontend.layout.app')
@section('title', 'My Account')
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
                            <h5 class="text-xl text-[#323232] font-semibold">Pritam Halder</h5>
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
                        <th class="border border-slate-300 py-1">Date</th>
                        <th class="border border-slate-300 py-1">Status</th>
                        <th class="border border-slate-300 py-1">Discount</th>
                        <th class="border border-slate-300 py-1">Total</th>
                        <th class="border border-slate-300 py-1">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="text-center">
                        <td class="border border-slate-300">1</td>
                        <td class="border border-slate-300">WC0000001</td>
                        <td class="border border-slate-300">{{ date('d-F-Y') }}</td>
                        <td class="border border-slate-300">
                            <span class="bg-theme text-white"><small>Pending</small></span>
                        </td>
                        <td class="border border-slate-300">10%</td>
                        <td class="border border-slate-300">49540 BDT</td>
                        <td class="border border-slate-300">Actions</td>
                    </tr>
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

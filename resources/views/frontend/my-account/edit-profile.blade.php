@extends('frontend.layout.app')
@section('title', 'Edit Profile | My Account')
@section('content')
    <div class="grid grid-cols-12 py-4 gap-6">
        <div class="col-span-12">
            <h2 class="font-semibold">My Account</h2>
        </div>
        <div class="col-span-12 md:col-span-3 border border-gray-300 rounded">
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
                            <a href="{{ route('frontend.myaccount.page') }}" class="@if(request()->is('my-account')) text-theme @endif py-2 text-sm uppercase block hover:text-theme">
                                <i class="fa-solid fa-table-cells-large mr-1"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="border-b border-b-[#ced4da]">
                            <a href="{{ route('frontend.myaccount.view_profile') }}" class="@if(request()->is('my-account/profile')) text-theme @endif py-2 text-sm uppercase block hover:text-theme ">
                                <i class="fa-regular fa-user mr-1"></i>
                                Profile
                            </a>
                        </li>
                        <li class="border-b border-b-[#ced4da]">
                            <a href="{{ route('frontend.myaccount.view_profile.edit') }}" class="@if(request()->is('my-account/profile/edit')) text-theme @endif py-2 text-sm uppercase block hover:text-theme">
                                <i class="fa-regular fa-pen-to-square mr-1"></i>
                                Edit Profile
                            </a>
                        </li>
                        <li class="border-b border-b-[#ced4da]">
                            <a href="{{ route('frontend.myaccount.address.view') }}" class="@if(request()->is('my-account/address')) text-theme @endif py-2 text-sm uppercase block hover:text-theme">
                                <i class="fa-solid fa-location-dot mr-1"></i>
                                Address
                            </a>
                        </li>
                        <li class="border-b border-b-[#ced4da]">
                            <a href="{{ route('frontend.myaccount.change_password') }}" class="@if(request()->is('my-account/change-password')) text-theme @endif py-2 text-sm uppercase block hover:text-theme">
                                <i class="fa-solid fa-key mr-1"></i>
                                Change Password
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('customer.logout') }}" class="py-2 text-sm uppercase block hover:text-theme">
                                <i class="fa-solid fa-right-from-bracket mr-1"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-9 border border-gray-300">

            <div class="profile_heading text-center py-4">
                <h3 class="text-2xl font-semibold">Edit Profile</h3>
            </div>
            <form action="{{ route('frontend.myaccount.update.profile', $profile->id) }}" method="POST">
                @method('POST') @csrf
                <div class="grid grid-cols-12 gap-4 px-4">
                    <div class="col-span-6">
                        <div class="flex flex-col gap-1">
                            <label>First Name</label>
                            <input type="text" required="required" value="{{ $profile->first_name }}" class="focus:outline-none border border-gray-300 rounded py-2 px-4" name="first_name" placeholder="First name">
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="flex flex-col gap-1">
                            <label>Last Name</label>
                            <input type="text" required="required" value="{{ $profile->last_name }}" class="focus:outline-none border border-gray-300 rounded py-2 px-4" name="last_name" placeholder="Last name">
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="flex flex-col gap-1">
                            <label>Email</label>
                            <input type="email" required="" class="focus:outline-none border border-gray-300 rounded py-2 px-4" name="email" value="{{ $profile->email }}" placeholder="Email">
                            @error('email')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="flex flex-col gap-1">
                            <label>Phone</label>
                            <input type="text" required="" class="focus:outline-none border border-gray-300 rounded py-2 px-4" name="phone" value="{{ $profile->phone }}" placeholder="Phone">
                            @error('phone')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-span-12">
                        <button type="submit" class="bg-theme px-4 py-2 w-full text-xl text-white rounded">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('js')
    <script>

    </script>
@endsection

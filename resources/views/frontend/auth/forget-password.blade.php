@extends('frontend.layout.app')
@section('title', 'Customer Login')
@section('content')
    <div class="flex items-center justify-center py-20">
        <div class="p-6 w-full max-w-md">
            <div class="flex justify-center items-center mb-4">
                <button id="loginTab" class="w-full py-2 px-4 border-b-[3px] border-b-theme text-theme font-bold uppercase focus:outline-none block text-center">Login</button>
                <button id="registerTab" class="w-full py-2 px-4 border-b-[3px] border-b-[#dedede] text-[#9f9f9ff0] font-bold uppercase focus:outline-none block text-center">Register</button>
            </div>
            <div id="loginForm" class="space-y-8">
                <div>
                    <input type="email" placeholder="Email or phone number" class="w-full p-2 border rounded">
                </div>
                <div>
                    <input type="password" placeholder="******" class="w-full p-2 border rounded">
                </div>
                <button class="w-full py-2 bg-theme text-white rounded">Login</button>
            </div>
            <div id="registerForm" class="space-y-8 hidden">
                <div>
                    <input type="text" placeholder="First Name" class="w-full p-2 border rounded">
                </div>
                <div>
                    <input type="text" placeholder="Last Name" class="w-full p-2 border rounded">
                </div>
                <div>
                    <input type="text" placeholder="Phone number" class="w-full p-2 border rounded">
                </div>
                <div>
                    <input type="email" placeholder="Email address" class="w-full p-2 border rounded">
                </div>
                <div>
                    <input type="password" placeholder="Password" class="w-full p-2 border rounded">
                </div>
                <div>
                    <input type="password" placeholder="Confirm Password" class="w-full p-2 border rounded">
                </div>
                <button class="w-full py-2 bg-theme text-white rounded">Register</button>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        const loginTab = document.getElementById('loginTab');
        const registerTab = document.getElementById('registerTab');
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');

        loginTab.addEventListener('click', () => {
            loginForm.classList.remove('hidden');
            registerForm.classList.add('hidden');
            loginTab.classList.add('border-b-theme', 'text-theme');
            loginTab.classList.remove('border-b-[#dedede]', 'text-[#9f9f9ff0]');
            registerTab.classList.add('border-b-[#dedede]', 'text-[#9f9f9ff0]');
            registerTab.classList.remove('border-b-theme', 'text-theme');
        });

        registerTab.addEventListener('click', () => {
            loginForm.classList.add('hidden');
            registerForm.classList.remove('hidden');
            registerTab.classList.add('border-b-theme', 'text-theme');
            registerTab.classList.remove('border-b-[#dedede]', 'text-[#9f9f9ff0]');
            loginTab.classList.add('border-b-[#dedede]', 'text-[#9f9f9ff0]');
            loginTab.classList.remove('border-b-theme', 'text-theme');
        });
    </script>
@endsection

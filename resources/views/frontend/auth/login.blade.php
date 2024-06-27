@extends('frontend.layout.app')
@section('title', 'Customer Login')
@section('content')
    <div class="flex items-center justify-center pb-10 pt-4 md:py-20">
        <div class="p-6 w-full max-w-md">
            <div class="flex justify-center items-center mb-10">
                <button id="loginTab" class="w-full py-2 px-4 border-b-[3px] border-b-theme text-theme font-bold uppercase focus:outline-none block text-center">Login</button>
                <button id="registerTab" class="w-full py-2 px-4 border-b-[3px] border-b-[#dedede] text-[#9f9f9ff0] font-bold uppercase focus:outline-none block text-center">Register</button>
            </div>
            <div id="loginForm" class="space-y-4 md:space-y-8">
                <div>
                    <input type="email" placeholder="Email or phone number" class="w-full p-3 focus:outline-none border rounded-md" autocomplete="off">
                </div>
                <div>
                    <input type="password" placeholder="******" class="w-full p-3 focus:outline-none border rounded-md" autocomplete="off">
                </div>
                <button class="w-full py-4 bg-theme text-white border border-theme rounded-md hover:bg-white hover:border hover:border-theme hover:text-theme font-semibold duration-300">Login</button>
                <div class="flex flex-col gap-4 text-center">
                    <a href="{{ route('user.forget.password') }}" class="text-sm text-theme">Forgot your password?</a>
                    <hr>
                    <p class="text-sm">New customer? <a href="#" id="registerLink" class="text-theme">Register</a> here.</p>
                </div>
            </div>
            <div id="registerForm" class="space-y-4 md:space-y-8 hidden">
                <div>
                    <input type="text" placeholder="First Name" class="w-full p-3 focus:outline-none border rounded-md" autocomplete="off">
                </div>
                <div>
                    <input type="text" placeholder="Last Name" class="w-full p-3 focus:outline-none border rounded-md" autocomplete="off">
                </div>
                <div>
                    <input type="text" placeholder="Phone number" class="w-full p-3 focus:outline-none border rounded-md" autocomplete="off">
                </div>
                <div>
                    <input type="email" placeholder="Email address" class="w-full p-3 focus:outline-none border rounded-md" autocomplete="off">
                </div>
                <div>
                    <input type="password" placeholder="Password" class="w-full p-3 focus:outline-none border rounded-md" autocomplete="off">
                </div>
                <div>
                    <input type="password" placeholder="Confirm Password" class="w-full p-3 focus:outline-none border rounded-md" autocomplete="off">
                </div>
                <button class="w-full py-4 bg-theme text-white border border-theme rounded-md hover:bg-white hover:border hover:border-theme hover:text-theme font-semibold duration-300">Register</button>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        const loginTab = document.getElementById('loginTab');
        const registerTab = document.getElementById('registerTab');
        const registerLink = document.getElementById('registerLink');
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');

        // Login Tab Button
        loginTab.addEventListener('click', () => {
            loginForm.classList.remove('hidden');
            registerForm.classList.add('hidden');
            loginTab.classList.add('border-b-theme', 'text-theme');
            loginTab.classList.remove('border-b-[#dedede]', 'text-[#9f9f9ff0]');
            registerTab.classList.add('border-b-[#dedede]', 'text-[#9f9f9ff0]');
            registerTab.classList.remove('border-b-theme', 'text-theme');
        });

        // Register Tab Button
        registerTab.addEventListener('click', () => {
            loginForm.classList.add('hidden');
            registerForm.classList.remove('hidden');
            registerTab.classList.add('border-b-theme', 'text-theme');
            registerTab.classList.remove('border-b-[#dedede]', 'text-[#9f9f9ff0]');
            loginTab.classList.add('border-b-[#dedede]', 'text-[#9f9f9ff0]');
            loginTab.classList.remove('border-b-theme', 'text-theme');
        });

        // Register Link button
        registerLink.addEventListener('click', () => {
            loginForm.classList.add('hidden');
            registerForm.classList.remove('hidden');
            registerTab.classList.add('border-b-theme', 'text-theme');
            registerTab.classList.remove('border-b-[#dedede]', 'text-[#9f9f9ff0]');
            loginTab.classList.add('border-b-[#dedede]', 'text-[#9f9f9ff0]');
            loginTab.classList.remove('border-b-theme', 'text-theme');
        });
    </script>
@endsection

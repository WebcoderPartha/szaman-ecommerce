@extends('frontend.layout.app')
@section('title', 'Customer Login')
@section('content')
    <div class=" flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <div class="flex justify-center items-center mb-4">
            <button id="loginTab" class="w-full py-2 px-4 border-b-2 border-b-[#dedede] text-[#9f9f9ff0] font-bold uppercase focus:outline-none block text-center">Login</button>
            <button id="registerTab" class="w-full py-2 px-4 border-b-2 border-b-[#dedede] py-2 px-4 text-[#9f9f9ff0] font-bold uppercase focus:outline-none block text-center">Register</button>
        </div>
        <div id="loginForm" class="space-y-4">
            <div>
                <label class="block text-gray-700">Email</label>
                <input type="email" class="w-full p-2 border rounded">
            </div>

            <button class="w-full py-2 bg-blue-500 text-white rounded">Login</button>
        </div>
        <div id="registerForm" class="space-y-4 hidden">
            <div>
                <label class="block text-gray-700">Name</label>
                <input type="text" class="w-full p-2 border rounded">
            </div>

            <button class="w-full py-2 bg-blue-500 text-white rounded">Register</button>
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
            loginTab.classList.add('border-b-[3px]', 'border-b-[#eb5d1e]', 'text-[#eb5d1e]');
            loginTab.classList.remove('border-b-2', 'border-b-[#dedede]', 'text-[#9f9f9ff0]');
            registerTab.classList.add('border-b-2', 'border-b-[#dedede]', 'text-[#9f9f9ff0]');
            registerTab.classList.remove('border-b-[3px]', 'border-b-[#eb5d1e]', 'text-[#eb5d1e]');
        });

        registerTab.addEventListener('click', () => {
            loginForm.classList.add('hidden');
            registerForm.classList.remove('hidden');
            registerTab.classList.add('border-b-[3px]', 'border-b-[#eb5d1e]', 'text-[#eb5d1e]');
            registerTab.classList.remove('border-b-2', 'border-b-[#dedede]', 'text-[#9f9f9ff0]');
            loginTab.classList.add('border-b-2', 'border-b-[#dedede]', 'text-[#9f9f9ff0]');
            loginTab.classList.remove('border-b-[3px]', 'border-b-[#eb5d1e]', 'text-[#eb5d1e]');
        });
    </script>
@endsection

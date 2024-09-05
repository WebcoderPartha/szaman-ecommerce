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
                    <input type="email" id="login_email_phone" placeholder="Email or phone number" class="w-full p-2 md:p-3 focus:outline-none border rounded-md" autocomplete="off">
                </div>
                <div>
                    <input type="password" id="login_password" placeholder="******" class="w-full p-2 md:p-3 focus:outline-none border rounded-md" autocomplete="off">
                </div>
                <button type="button" onclick="customer_login()" class="w-full py-2 md:py-4 bg-theme text-white border border-theme rounded-md hover:bg-white hover:border hover:border-theme hover:text-theme font-semibold duration-300">Login</button>
                <div class="flex flex-col gap-4 text-center">
                    <a href="{{ route('user.forget.password') }}" class="text-sm text-theme">Forgot your password?</a>
                    <hr>
                    <p class="text-sm">New customer? <a href="#" id="registerLink" class="text-theme">Register</a> here.</p>
                </div>
            </div>
            <div id="registerForm" class="space-y-4 md:space-y-8 hidden">
                <div>
                    <input type="text" id="first_name" placeholder="First Name" class="w-full p-2 md:p-3 focus:outline-none border rounded-md" autocomplete="off">
                </div>
                <div>
                    <input type="text" id="last_name" placeholder="Last Name" class="w-full p-2 md:p-3 focus:outline-none border rounded-md" autocomplete="off">
                </div>
                <div>
                    <input type="text" id="phone" placeholder="Phone number" class="w-full p-2 md:p-3 focus:outline-none border rounded-md" autocomplete="off">
                </div>
                <div>
                    <input type="email" id="email" placeholder="Email address" class="w-full p-2 md:p-3 focus:outline-none border rounded-md" autocomplete="off">
                </div>
                <div>
                    <input type="password" id="password" placeholder="Password" class="w-full p-2 md:p-3 focus:outline-none border rounded-md" autocomplete="off">
                </div>
                <div>
                    <input type="password" id="confirm_password" placeholder="Confirm Password" class="w-full p-2 md:p-3 focus:outline-none border rounded-md" autocomplete="off">
                </div>
                <button type="button" onclick="submitRegisterAction()" class="w-full p-2 md:p-3 bg-theme text-white border border-theme rounded-md hover:bg-white hover:border hover:border-theme hover:text-theme font-semibold duration-300">Register</button>
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

        const submitRegisterAction = () => {
            let first_name = document.getElementById('first_name').value
            let last_name = document.getElementById('last_name').value
            let phone = document.getElementById('phone').value
            let email = document.getElementById('email').value
            let password = document.getElementById('password').value
            let confirm_password = document.getElementById('confirm_password').value
            if (!first_name?.length > 0){
                toastr.error('First name is required!');
            }else if(!last_name?.length > 0){
                toastr.error('Last name is required!');
            }else if(!phone?.length > 0){
                toastr.error('Phone number is required!');
            }else if(!email?.length > 0){
                toastr.error('Email is required!');
            }else if(!password?.length > 0){
                toastr.error('Password is required!');
            }else if(!confirm_password?.length > 0){
                toastr.error('Confirm Password is required!');
            }else if(password !== confirm_password){
                toastr.error('Confirm password not match!');
            }else {
                toastr.success('ok')
                const data = {
                    first_name: first_name,
                    last_name: last_name,
                    phone: phone,
                    email: email,
                    password: password,
                }
                axios.post('{{ route('user.register.post') }}', data).then(regRes => {
                    window.location.href =  "{{ route('frontend.home_page') }}"
                    toastr.success(loginRes.data.success);
                })
            }
        }

        // Customer Login method
        const customer_login = () => {
            let login_email_phone = document.getElementById('login_email_phone').value
            let login_password = document.getElementById('login_password').value
            if (!login_email_phone?.length > 0){
                toastr.error('Enter Email or Phone number!');
            }else if (!login_password?.length > 0){
                toastr.error('Enter password!');
            }else {
                const login_data = {
                    login_email_phone: login_email_phone,
                    login_password: login_password
                }
                axios.post('{{ route('customer.login') }}', login_data).then(loginRes => {
                    console.log(loginRes.data);
                    if (loginRes.data.error){
                        toastr.error(loginRes.data.error);
                    }else {
                        window.location.href =  "{{ route('frontend.myaccount.page') }}"
                        toastr.success(loginRes.data.success);
                    }
                })
            }
        }
    </script>
@endsection

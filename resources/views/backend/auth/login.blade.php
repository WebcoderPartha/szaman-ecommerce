<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Login | HRMS
    </title>
    <meta name="description" content="Login">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="{{ asset('backend/assets/css/vendors.bundle.css') }}">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="{{ asset('backend/assets/css/app.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('backend/assets') }}/css/notifications/sweetalert2/sweetalert2.bundle.css">
    <link id="mytheme" rel="stylesheet" media="screen, print" href="#">
    <link id="myskin" rel="stylesheet" media="screen, print" href="{{ asset('backend/assets/css/skins/skin-master.css') }}">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('backend/assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('backend/assets/img/favicon/favicon-32x32.png') }}">
    <link rel="mask-icon" href="{{ asset('backend/assets/img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="stylesheet" media="screen, print" href="{{ asset('backend/assets/css/page-login-alt.css') }}">
</head>

<body>
<!-- DOC: script to save and load page settings -->
<script>
    /**
     *	This script should be placed right after the body tag for fast execution
     *	Note: the script is written in pure javascript and does not depend on thirdparty library
     **/
    'use strict';

    var classHolder = document.getElementsByTagName("BODY")[0],
        /**
         * Load from localstorage
         **/
        themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {},
        themeURL = themeSettings.themeURL || '',
        themeOptions = themeSettings.themeOptions || '';
    /**
     * Load theme options
     **/
    if (themeSettings.themeOptions)
    {
        classHolder.className = themeSettings.themeOptions;
        console.log("%c✔ Theme settings loaded", "color: #148f32");
    }
    else
    {
        console.log("%c✔ Heads up! Theme settings is empty or does not exist, loading default settings...", "color: #ed1c24");
    }
    if (themeSettings.themeURL && !document.getElementById('mytheme'))
    {
        var cssfile = document.createElement('link');
        cssfile.id = 'mytheme';
        cssfile.rel = 'stylesheet';
        cssfile.href = themeURL;
        document.getElementsByTagName('head')[0].appendChild(cssfile);

    }
    else if (themeSettings.themeURL && document.getElementById('mytheme'))
    {
        document.getElementById('mytheme').href = themeSettings.themeURL;
    }
    /**
     * Save to localstorage
     **/
    var saveSettings = function()
    {
        themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
        {
            return /^(nav|header|footer|mod|display)-/i.test(item);
        }).join(' ');
        if (document.getElementById('mytheme'))
        {
            themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
        };
        localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
    }
    /**
     * Reset settings
     **/
    var resetSettings = function()
    {
        localStorage.setItem("themeSettings", "");
    }

</script>
<div class="blankpage-form-field">
    <div class="" style="background: #886ab5">
        <h2 class="text-center py-2">
            <img src="{{ asset('backend/assets/img/logo.png') }}" width="150px" aria-roledescription="logo" alt="">
        </h2>
    </div>
    <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
{{--        <form action="{{ route('authenticate') }}" method="post">--}}
        <form method="post" id="login_form">
            @csrf
            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email">
                @error('email')
                    <span class="help-block text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                @error('password')
                <span class="help-block text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="text-center">
                <button id="login_button" type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>

</div>

<video poster="{{ asset('backend/assets/img/backgrounds/clouds.png') }}" id="bgvid" playsinline autoplay muted loop>
    <source src="{{ asset('backend/assets/media/video/cc.webm') }}" type="video/webm">
    <source src="{{ asset('backend/assets/media/video/cc.mp4') }}" type="video/mp4">
</video>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js"></script>
<script src="{{asset('backend/assets/js/vendors.bundle.js')}}"></script>
<script src="{{ asset('backend/assets/js/app.bundle.js') }}"></script>
<script src="{{ asset('backend/assets') }}/js/notifications/sweetalert2/sweetalert2.bundle.js"></script>
<script>
    // Sweetalert
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
    });

    let successMessage = "{{ session('success') }}";
    // Login Message
    if (successMessage){
        Toast.fire({
            icon: "success",
            title: successMessage
        });
    }
    if (localStorage.getItem('token')){
        window.location = "{{ route('dashboard') }}"
    }
    $('#login_button').click(function (e) {
        e.preventDefault();
        let email = $('#email').val();
        let password = $('#password').val();
        if (!email.length > 0){
            Toast.fire({
                icon: "error",
                title: 'Email is required!'
            });
        }else if (!password.length > 0){
            Toast.fire({
                icon: "error",
                title: 'Password is required!'
            });
        }else{
            let data = {
                email: email,
                password: password
            }
            axios.post('/api/auth/login', data).then(response => {
                if (response.data.success){
                    localStorage.setItem('token', response.data.token)
                    localStorage.setItem('user_id', response.data.user.id);
                    localStorage.setItem('role_id', response.data.user.role_id);
                    window.location = "{{ route('dashboard') }}"
                    // console.log(response.data)
                }else{
                    Toast.fire({
                        icon: "error",
                        title: response.data.error
                    });
                }

            })
        }
    })



</script>
<!-- Page related scripts -->
</body>
<!-- END Body -->
</html>

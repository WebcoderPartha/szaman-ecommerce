<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://cdn.oaistatic.com/_next/static/media/apple-touch-icon.82af6fe1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://cdn.oaistatic.com/_next/static/media/apple-touch-icon.82af6fe1.png">
    <link rel="mask-icon" href="https://cdn.oaistatic.com/_next/static/media/apple-touch-icon.82af6fe1.png" color="#5bbad5">
    <link rel="favicon" href="https://cdn.oaistatic.com/_next/static/media/apple-touch-icon.82af6fe1.png" color="#5bbad5">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <!-- Swiper slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    @yield('css')
</head>
<body class="bg-[#FCFCFC]">
<!-- Desktop Header -->
<x-frontend.common.header />
<!--/ Desktop Header -->
<x-frontend.common.mobile-header />
<div class="main-content mx-auto md:w-[1560px] max-w-full px-4">
    @yield('content')
</div>
<!-- Footer -->
<x-frontend.common.footer />
<!--/ Footer -->
<!-- Desktop Fixed Product Cart -->
<x-frontend.common.sticky-cart />
<!--/ Desktop Fixed Product Cart -->
<!-- Mobile Footer -->
<x-frontend.common.mobile-footer />
<!--/ Mobile Footer -->
@yield('js')
</body>
</html>

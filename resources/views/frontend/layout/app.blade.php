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
    @vite('resources/css/app.css')
    @yield('css')
</head>
<body class="bg-[#FCFCFC]">
    <header class="sticky top-0 z-50 bg-[#eb5d1e] px-2 md:px-0" style="filter:drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.08))">
        <div class="container flex gap-6 py-2 m-auto">
            <div class="flex items-center flex-1 gap-4 md:gap-8 justify-between">
                <span class="md:w-[120px] w-[70px]">
                    <a href="/">
                        <img src="https://m.media-amazon.com/images/I/615RU2+L5ML.jpg" width="50" alt="">
                    </a>
                </span>
                <div class="hidden w-full px-4 md:flex">
                    <div class="w-full flex justify-center items-center">
                        <div class=" max-w-[719px] flex-1 relative">
                            <div class="flex w-full overflow-hidden rounded-md">
                                <div class="relative flex-1">
                                    <input class="block w-full p-3 pl-4 outline-none" placeholder="Search in Store" autocomplete="off" value="">
                                </div>
                                <button class="gap-2 p-2 px-5 text-lg font-medium text-white bg-[#e54904]">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-4 ">
                <a class="relative transition-colors outline-1 p-1 text-white" href="/orders/create">
                    <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <span class="sr-only">Cart</span>
                </a>
                <a class="inline-flex md:border py-2 md:rounded-md text-white cursor-pointer items-center text-base justify-center md:w-[120px] gap-2 transition-colors" href="/auth/login">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z">
                        </path>
                    </svg>
                    <span class="hidden md:inline-block">Sign in</span>
                    <span class="sr-only">Sign in</span>
                </a>
            </div>
        </div>
        <div class="container mx-auto pt-2 pb-4 md:pb-0 md:pt-0">
            <div class="flex w-full md:hidden"><div class="w-full">
                    <div class=" max-w-[719px] relative">
                        <div class="flex w-full overflow-hidden rounded-md">
                            <div class="relative flex-1">
                                <input class="block w-full p-3 pl-4 outline-none bg-black1" placeholder="Search in Evaly" autocomplete="off" value="">
                            </div>
                            <button class="gap-2 p-2 px-5 text-lg font-medium text-white bg-[#e54904]">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
{{--<header class="sticky top-0 z-20 bg-[#eb5d1e]" style="filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.08));">--}}
{{--    <div class="px-4 md:px-2 container flex gap-20 py-5 m-auto justify-between items-center">--}}
{{--        <div class="flex items-center flex-1 gap-4 md:gap-8">--}}
{{--                        <span class="md:w-[120px] w-[70px]">--}}
{{--                            <a href="/">--}}
{{--                               <h2> Logo Here</h2>--}}
{{--                            </a>--}}
{{--                        </span>--}}

{{--        </div>--}}
{{--        <div class="hidden w-full px-4 md:flex items-center">--}}
{{--            <div class="md:w-[800px] relative mx-auto">--}}
{{--                <div class="flex w-full overflow-hidden ">--}}
{{--                    <div class="relative flex-1">--}}
{{--                        <input class="block w-full p-2 pl-4 outline-none bg-black1" placeholder="Search in Evaly" autocomplete="off" value="" />--}}
{{--                    </div>--}}
{{--                    <button class="gap-2 px-2 text-lg font-medium text-white bg-gray-300">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">--}}
{{--                            <path d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z"></path>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="flex items-center gap-4">--}}
{{--            <a class="relative text-white md:hover:py-2 md:hover:text-black rounded-md transition-colors md:hover:bg-gray-50 outline-1 outline-gray-500 p-1 flex gap-2" href="/orders/create">--}}
{{--                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">--}}
{{--                    <path--}}
{{--                        stroke-linecap="round"--}}
{{--                        stroke-linejoin="round"--}}
{{--                        stroke-width="2"--}}
{{--                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"--}}
{{--                    ></path>--}}
{{--                </svg>--}}
{{--                <span>Cart</span>--}}
{{--            </a>--}}
{{--            <a class="inline-flex md:py-2 text-white md:hover:text-black cursor-pointer items-center text-base justify-center h-full md:w-[120px] gap-2 rounded-md transition-colors md:hover:bg-gray-50" href="/auth/login">--}}
{{--                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="20" width="20" xmlns="http://www.w3.org/2000/svg">--}}
{{--                    <path--}}
{{--                        d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"--}}
{{--                    ></path>--}}
{{--                </svg>--}}
{{--                <span class="hidden md:inline-block">Sign in</span><span class="sr-only">Sign in</span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}

<div class="main-content container mx-auto">
    @yield('content')
</div>
    <x-frontend.common.footer />
@yield('js')
</body>
</html>

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
<!-- Header -->
<x-frontend.common.header />
<!--/ Header -->
<div class="main-content mx-auto md:w-[1560px] max-w-full px-4">
    @yield('content')
</div>
<!-- Footer -->
<x-frontend.common.footer />

<!--/ Footer -->
<div class="fixed_product_sticky fixed top-[40%] bg-white drop-shadow right-0" id="openModalButton">
    <div class="flex flex-col items-center justify-center">
        <div class="fixed_product_sticky_icon p-2">
            <i class="fa-solid fa-cart-shopping text-xl"></i>
        </div>
        <div class="fixed_product_sticky_price">
            <p class="subTotal">
            </p>
        </div>
        <div class="fixed_product_sticky_count bg-theme text-white px-3 py-1">
            <p id="item_count">7 items</p>
        </div>
    </div>
</div>


<!-- Modal -->
<div id="cartModel" class="fixed top-0 left-full inset-0 bg-gray-600 bg-opacity-50 items-center justify-center z-50">
    <div id="cartSlide" class="bg-white shadow-lg px-4 py-2 w-full h-screen max-w-md absolute -right-[600px] duration-300 top-0">
        <div class="flex justify-between items-center">
            <div class="icon flex flex-row gap-1 justify-center items-center">
                <div class="fixed_product_sticky_icon p-2">
                    <i class="fa-solid text-theme fa-cart-shopping text-2xl"></i>
                </div>
                <div class="w-6 h-6 bg-theme rounded-full flex items-center justify-center text-white">
                    <span>10</span>
                </div>
            </div>
            <button id="closeModalButton" class="text-gray-600 hover:text-gray-900">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <hr>
        <div class="flex flex-row gap-1 justify-between items-center">
            <div>
                <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-14T12:04:34.269_1.jpg" width="80" height="80" alt="">
            </div>
            <div>
                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
            </div>
            <div>
                <a class="card_remove text-red-600">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </div>
        </div>
        <div class="flex flex-row gap-1 justify-between items-center">
            <div>
                <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-14T12:04:34.269_1.jpg" width="80" height="80" alt="">
            </div>
            <div>
                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
            </div>
            <div>
                <a class="card_remove text-red-600">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </div>
        </div>
        <div class="flex flex-row gap-1 justify-between items-center">
            <div>
                <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-14T12:04:34.269_1.jpg" width="80" height="80" alt="">
            </div>
            <div>
                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
            </div>
            <div>
                <a class="card_remove text-red-600">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </div>
        </div>
        <div class="flex flex-row gap-1 justify-between items-center">
            <div>
                <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-14T12:04:34.269_1.jpg" width="80" height="80" alt="">
            </div>
            <div>
                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
            </div>
            <div>
                <a class="card_remove text-red-600">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </div>
        </div>
        <div class="flex flex-row gap-1 justify-between items-center">
            <div>
                <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-14T12:04:34.269_1.jpg" width="80" height="80" alt="">
            </div>
            <div>
                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
            </div>
            <div>
                <a class="card_remove text-red-600">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </div>
        </div>
        <div class="flex flex-row gap-1 justify-between items-center">
            <div>
                <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-14T12:04:34.269_1.jpg" width="80" height="80" alt="">
            </div>
            <div>
                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
            </div>
            <div>
                <a class="card_remove text-red-600">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </div>
        </div>
        <div class="flex flex-row gap-1 justify-between items-center">
            <div>
                <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-14T12:04:34.269_1.jpg" width="80" height="80" alt="">
            </div>
            <div>
                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
            </div>
            <div>
                <a class="card_remove text-red-600">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    const openModalButton = document.getElementById('openModalButton');
    const closeModalButton = document.getElementById('closeModalButton');
    const modal = document.getElementById('cartModel');
    const sliding = document.getElementById('cartSlide');

    openModalButton.addEventListener('click', () => {
        modal.classList.remove('left-full');
        modal.classList.add('left-0');
        document.body.classList.add("overflow-hidden");
        sliding.classList.remove('-right-[600px]')
        sliding.classList.add('-right-0')
    });

    closeModalButton.addEventListener('click', () => {
        modal.classList.add('left-full');
        modal.classList.remove('left-0');
        document.body.classList.remove("overflow-hidden");
        sliding.classList.remove('-right-0')
        sliding.classList.add('-right-[600px]')
    });

    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('left-full');
            modal.classList.remove('left-0');
            sliding.classList.remove('-right-0')
            sliding.classList.add('-right-[600px]')
            document.body.classList.remove("overflow-hidden");
        }
    });
</script>
@yield('js')
</body>
</html>

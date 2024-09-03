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
    <!-- Toastr css -->
    <link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @vite('resources/css/app.css')
    @yield('css')
<!-- Crisp Chat plugin --------->
{{--    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="072efc38-340f-4eb8-a485-7dbaf008f76f";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>--}}
    <!-- Crisp Chat plugin --------->
</head>
{{--<body class="bg-[#f7f8fa]">--}}
<body class="bg-white">
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

<!-- Mobile Footer -->
<x-frontend.common.mobile-footer />
<!--/ Mobile Footer -->

<!--=============== Sticky Cart ===============-->
<div class="fixed_product_sticky hidden md:block fixed top-[40%] z-20 bg-white drop-shadow right-0 cursor-pointer" id="openModalButton">
    <div class="flex flex-col items-center justify-center">
        <div class="fixed_product_sticky_icon p-1">
            <i class="fa-solid text-theme fa-cart-shopping text-xl"></i>
        </div>

        <div class="fixed_product_sticky_count bg-theme text-white px-2 py-1">
            <p><span class="item_count">{{ Cart::instance('shopping')->count() }}</span> items</p>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="cartModel" class="fixed top-0 left-full inset-0 bg-gray-600 bg-opacity-50 items-center justify-center z-[9999]">
    <div id="cartSlide" class="bg-white shadow-lg py-2 w-full h-screen max-h-full max-w-md absolute -right-[600px] duration-300 top-0">
        <!-- Fixed Product Cart Header -->
        <div class="flex justify-between items-center px-2">
            <div class="icon flex flex-row gap-2 justify-center items-center">
                <div class="fixed_product_sticky_icon">
                    <i class="fa-solid text-theme fa-cart-shopping text-2xl"></i>
                </div>
                <div class="w-6 h-6 bg-theme rounded-full flex items-center justify-center text-white">
                    <span class="item_count">{{ Cart::instance('shopping')->count() }}</span>
                </div>
            </div>
            <button id="closeModalButton" class="text-gray-600 hover:text-gray-900 bg-red-500 px-2 rounded-sm">
                <i class="fa-solid fa-xmark text-xl text-white"></i>
            </button>
        </div>
        <hr class="mt-2">
        <!--/ Fixed Product Cart Header -->
        <!-- Fixed Product Cart Body -->
        <div class="fixed_product_cart_body h-[700px] pb-[300px] md:pb-[200px] overflow-y-scroll">
            <div class="px-2 py-2 stickyCart">

            </div>
        </div>
        <!--/ Fixed Product Cart Body -->
        <!-- Fixed Product Cart Footer -->
        <div class="fixed_product_cart_footer bg-[#f5f6f7] absolute left-0 bottom-0 w-full py-4">
            <div class="px-2 flex flex-col gap-2">
                <div class="subtotal_container flex flex-row justify-between items-center">
                    <span>Subtotal:</span>
                    <p><span id="fix_subtotal_price">{{ Cart::instance('shopping')->subtotal() }}</span> Tk</p>
                </div>
                <a href="{{ route('frontend.checkout_view') }}" class="px-4 py-3 bg-theme font-bold text-white text-center">Checkout</a>
                <a href="{{ route('frontend.cart_view') }}" class="px-4 py-3 font-bold bg-black text-white text-center">View Cart</a>
            </div>
        </div>
        <!--/ Fixed Product Cart Footer -->
    </div>
</div>
<!--=============== Sticky Cart ===============-->

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Axios -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js"></script>
<!-- Toastr jS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->

<script>

    window.onscroll = function() {myFunction()};

    var header = document.getElementById("myheader");
    var header_bottom = document.getElementById("header_bottom");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > 10) {
            header.classList.add("sticky_header");
            header_bottom.classList.add('md:hidden')
            header_bottom.classList.remove('md:block')
        } else {
            header.classList.remove("sticky_header");
            header_bottom.classList.remove('md:hidden')
            header_bottom.classList.add('md:block')
        }
    }

    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    let bannerSwiper = new Swiper(".bannerSwiper", {
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });

    // ================ Stick Cart =======================//
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
    // ================ Stick Cart =======================//

    //================= Single Product Add To Cart =======================//
    function add_to_carts(event, product_id){
        event.preventDefault();
        axios.post('{{ route('frontend.addtocart') }}', {
            product_id: parseInt(product_id),
            quantity: 1
        }).then(addCartRes => {
            toastr.success(addCartRes.data.success);
            getCartContent();
        })
    }
    //================ Add To Cart =========================//


    //================= Single Product Add To Cart =======================//
    function add_to_cart(product_id){
        let qty = document.getElementById('qtyValue');
        axios.post('{{ route('frontend.addtocart') }}', {
            product_id: parseInt(product_id),
            quantity: parseInt(qty.value)
        }).then(addCartRes => {
            toastr.success(addCartRes.data.success);
            getCartContent();
        })
    }
    //================ Add To Cart =========================//


    // ==================== Increment Cart ================//
    const cartIncrement = (id) => {
        let qty = document.getElementById('qty_'+id).value
        document.getElementById('qty_'+id).value = parseInt(qty) + 1;
        // console.log(qty)
        let data = {
            rowId: id,
            qty: parseInt(qty) + 1
        }
        axios.post('/updatecart', data).then(updateCartRes => {
            // toastr.success(updateCartRes.data.success);
            getCartContent();
            getCartPageContent();
        })

    }
    // ==================== Increment Cart ================//

    // ==================== Decrement Cart ================//
    const cartDecrement = (id) => {
        let qty = document.getElementById('qty_'+id).value
        if (parseInt(qty) > 1){
            document.getElementById('qty_'+id).value = parseInt(qty) - 1;
            let data = {
                rowId: id,
                qty: parseInt(qty) - 1
            }
            axios.post('/updatecart', data).then(updateCartRes => {
                // toastr.success(updateCartRes.data.success);
                getCartContent();
                getCartPageContent();
            })
        }
    }
    // ==================== Decrement Cart ================//

    // ====================  Cart removed ================= //
    const cartRemove = (rowId) => {
        const data = {
            rowId: rowId
        }
        axios.post('/removecart', data).then(rmvCartRes => {
            getCartContent();
            getCartPageContent();
            toastr.success(rmvCartRes.data.success);
        })
    }
    // ====================/ Cart Removed ===================//

    //================= get cart items ============== //
    const getCartContent = () => {
        axios.get("{{route('frontend.getcarts')}}").then(getCartContRes => {
            let carts = Object.values(getCartContRes.data.cart);

            if (carts?.length > 0){
                let fixedCatItems = '';
                carts.forEach(cartItems => {
                    fixedCatItems +='<div class="grid grid-cols-12 border-b pb-1"><div class="col-span-3"><img src="/storage/product/'+cartItems.options.image+'" width="80" height="80" alt=""/></div><div class="col-span-9"><div class="flex flex-col w-full gap-1"><div class="flex justify-between gap-4"><h3>'+cartItems.name+'</h3> <a class="card_remove text-red-600 cursor-pointer" id="'+cartItems.rowId+'" onclick="cartRemove(this.id)" > <i class="fa-solid fa-trash"></i></a></div><div class="fixed_product_card_qty_price flex flex-row items-center justify-between"><div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded"><div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer" id="'+cartItems.rowId+'" onclick="cartDecrement(this.id)"><i class="fa-solid fa-minus"></i></div><input class="product_qty w-10 font-semibold focus:outline-none text-center" id="qty_'+ cartItems.rowId +'" type="text" value="'+cartItems.qty+'"><div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer" id="'+cartItems.rowId+'" onclick="cartIncrement(this.id)"><i class="fa-solid fa-plus"></i></div></div><div class="fixed_product_card_close_price"><p>'+ cartItems.subtotal +' TK</p></div></div></div></div></div>'
                })
                $('.stickyCart').html(fixedCatItems);
                $('#fix_subtotal_price').text(getCartContRes.data.subtotal);
                $('.subTotal').text(getCartContRes.data.subtotal);
                $('.item_count').text(getCartContRes.data.total_qty);
            }else {
                $('#fix_subtotal_price').text("0.00")
                $('.item_count').text(0)
                $('.subTotal').text('0.00');
                $('.stickyCart').html('<h2 class="text-center text-xl">Cart Empty!</h2>')

            }
        })
    }
    getCartContent();
    //================= get cart items ============== //

    //================= Cart Page =====================//
    const getCartPageContent = () => {
        axios.get("{{route('frontend.getcarts')}}").then(getCartPageContRes => {
            let cartPage = Object.values(getCartPageContRes.data.cart);

            if (cartPage?.length > 0){
                let cartPageContent = '';
                cartPage.forEach(cartPageItems => {
                    cartPageContent +='<div class="cart-item py-4 grid grid-cols-12 gap-4 border-b border-[#EEEEEE]"><div class="col-span-12 md:col-span-8"><div class="flex flex-row gap-6"><div class="item-image"><img src="/storage/product/'+cartPageItems.options.image+'" alt="" class="w-32 border rounded"></div><div class=" flex flex-col justify-between"><div class="items-title"><h2>'+cartPageItems.name+' </h2></div><div id="'+cartPageItems.rowId+'" onclick="cartRemove(this.id)" class="hidden md:block remove_button uppercase font-semibold cursor-pointer hover:text-theme">Remove</div></div></div></div><div class="col-span-12 md:col-span-4"><div class="flex flex-row items-center justify-between"><div class="view_cart_price"><span> '+cartPageItems.subtotal+'</span></div><div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded"><div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer" id="'+ cartPageItems.rowId +'" onclick="cartDecrement(this.id)"><i class="fa-solid fa-minus"></i></div><input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" id="qty_'+ cartPageItems.rowId +'" value="'+cartPageItems.qty+'"><div id="'+ cartPageItems.rowId +'" onclick="cartIncrement(this.id)" class="fixed_product_card_qty_plus border-l px-2 cursor-pointer"><i class="fa-solid fa-plus"></i></div></div></div></div><div class="col-span-12"><div id="'+cartPageItems.rowId+'" onclick="cartRemove(this.id)" class="md:hidden block text-center remove_button uppercase font-semibold cursor-pointer hover:text-theme">Remove</div></div></div>'
                })
                $('.cartPageContent').html(cartPageContent);
                $('#fix_subtotal_price').text(getCartPageContRes.data.subtotal)
                $('.item_count').text(getCartPageContRes.data.total_qty)
                $('.mycartqty').text(getCartPageContRes.data.total_qty);
                $('.subTotal').text(getCartPageContRes.data.subtotal)
                $('.total_amount').text(getCartPageContRes.data.subtotal)
            }else {
                $('#fix_subtotal_price').text("0.00")
                $('.item_count').text(0)
                $('.mycartqty').text(0)
                $('.cartPageContent').html('<h2 class="text-center text-xl">Cart Empty!</h2>')
                $('.subTotal').text('0.00')
                $('.total_amount').text('0.00')
            }
        })
    }
    getCartPageContent()
    //================ Cart Page =====================//

    //================ Search Product ================//
    function searchProduct(value){
        let search_button = document.getElementById('search_button');
        let close_search_button = document.getElementById('close_search_button');
        let ps_container_id = document.getElementById('ps-container');
        if (value.length > 2){
            let data = {
                keyword: value
            }
            axios.post("{{route('frontend.search_product')}}", data).then(searchRes => {
                if (searchRes.data.search_status == true){
                    ps_container_id.classList.remove('hidden')
                    search_button.classList.add('hidden')
                    close_search_button.classList.remove('hidden')
                    $('.search-product-container').html(searchRes.data.content)
                }else{
                    ps_container_id.classList.add('hidden')

                }
                console.log(searchRes.data);
            })

        }else{
            ps_container_id.classList.add('hidden')
            search_button.classList.remove('hidden')
            close_search_button.classList.add('hidden')
        }

    }

    function searchCloseButton(){
        let ps_container_id = document.getElementById('ps-container');
        ps_container_id.classList.add('hidden')
        let search_button = document.getElementById('search_button');
        search_button.classList.remove('hidden')

        let close_search_button = document.getElementById('close_search_button');
        close_search_button.classList.add('hidden')
        $('#searchKeyword').val('');
        $('.search-product-container').html("")

    }

    //================ Search Product ================//

    //================ Cash On Delivery Order ===============//
    function cashOnDelivery(){
        let shipping_charge = document.getElementById('area').value
        let hasAddress = document.getElementById('hasAddress').value
        if (shipping_charge == '0'){
            toastr.error('Select delivery area!')
        }else if(hasAddress == '0'){
            toastr.error('Please add shipping address!')
        }else{
            axios.post("{{route('frontend.cod.ordernow')}}", {payment_method: 'COD'}).then(codOrderRes => {
                toastr.success(codOrderRes.data.success)
                getCartContent();
                getCartPageContent();
                window.location.href = "{{ route('frontend.home_page') }}"
                // console.log(codOrderRes.data);
            })
        }
    }
    //================ End Cash On Delivery Order ===============//

    //================ Online Payment Order ===============//
    function onlinePaymentOrder(){
        let shipping_charge = document.getElementById('area').value
        let hasAddress = document.getElementById('hasAddress').value
        if (shipping_charge == '0'){
            toastr.warning('Select delivery area!')
        }else if(hasAddress == '0'){
            toastr.warning('Please add shipping address!')
        }else{
            {{--axios.post("{{route('frontend.cod.ordernow')}}", {payment_method: 'COD'}).then(codOrderRes => {--}}
                {{--    toastr.success(codOrderRes.data.success)--}}
                {{--    getCartContent();--}}
                {{--    getCartPageContent();--}}
                {{--  --}}
                {{--    // console.log(codOrderRes.data);--}}
                {{--})--}}
            window.location.href = "{{ route('online.payment') }}"
            {{--axios.post("{{route('frontend.cod.ordernow')}}", {payment_method: 'COD'}).then(codOrderRes => {--}}
            {{--    toastr.success(codOrderRes.data.success)--}}
            {{--    getCartContent();--}}
            {{--    getCartPageContent();--}}
            {{--  --}}
            {{--    // console.log(codOrderRes.data);--}}
            {{--})--}}
        }
    }
    //================ End Online Payment Order ===============//


    let featureProductSlider = new Swiper(".featureProductSlider", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        speed: 500,
        navigation: {
            nextEl: ".feature-swiper-button-next",
            prevEl: ".feature-swiper-button-prev",
        },
        breakpoints: {
            "@0.00": {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            "@0.75": {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            "@1.00": {
                slidesPerView: 3,
                spaceBetween: 15,
            },
            "@1.50": {
                slidesPerView: 5,
                spaceBetween: 10,
            },
        },
    });

    let hotDealSlider = new Swiper(".hotDealSlider", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        speed: 500,
        navigation: {
            nextEl: ".hotdeal-swiper-button-next",
            prevEl: ".hotdeal-swiper-button-prev",
        },
        breakpoints: {
            "@0.00": {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            "@0.75": {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            "@1.00": {
                slidesPerView: 3,
                spaceBetween: 15,
            },
            "@1.50": {
                slidesPerView: 5,
                spaceBetween: 10,
            },
        },
    });

    let bestSellingSlider = new Swiper(".bestSellingSlider", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        speed: 500,
        navigation: {
            nextEl: ".bestselling-swiper-button-next",
            prevEl: ".bestselling-swiper-button-prev",
        },
        breakpoints: {
            "@0.00": {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            "@0.75": {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            "@1.00": {
                slidesPerView: 3,
                spaceBetween: 15,
            },
            "@1.50": {
                slidesPerView: 5,
                spaceBetween: 10,
            },
        },
    });

</script>
@yield('js')
</body>
</html>

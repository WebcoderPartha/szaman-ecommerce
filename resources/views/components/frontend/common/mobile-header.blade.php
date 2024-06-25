<header class="header_area block md:hidden">
    <!-- header top start -->
    <div class="header_top py-2 bg-theme">
        <div class="header_top_list">
            <ul class="text-center flex flex-row items-center justify-between px-4">
                <li>
                    <a href="#" class="header_top_list_link text-white text-[12px] flex flex-row gap-1 items-center justify-center">
                        <i class="fa-solid fa-location-dot "></i>
                        <span>Order Tracking</span>
                    </a>
                </li>
                <li>
                    <a href="tel:+8809613332020" class="header_top_list_link text-white text-[12px] flex flex-row gap-1 items-center justify-center">
                        <i class="fa-solid fa-phone"></i>
                        <span>+880 961 333 2020</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="header_top_list_link text-[12px] text-white flex flex-row gap-1 items-center justify-center">
                        <i class="fa-solid fa-headset"></i>
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- header top end -->
    <!-- Header Middle -->
    <div class="mobile_header_middle py-2" id="fix_mobile_sticky">
        <div class="flex flex-row justify-between items-center px-4">
            <div>
                <a class="header_mobile_toggle text-xl text-theme cursor-pointer">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>
            <div>
                <a href="{{ route('frontend.home_page') }}"><img src="{{ asset('frontend/img/log.png') }}" width="110" alt=""></a>
            </div>
            <div>
                <a class="cursor-pointer text-xl text-theme"><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
        </div>
    </div>
    <!--/ Header Middle -->

</header>


<script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("fix_mobile_sticky");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("mobile_sticky_header");
            } else {
                header.classList.remove("mobile_sticky_header");
            }
        }
</script>


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
            <div id="mobileMenuIconBars">
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

<div class="md:hidden bg-white z-[99999] fixed top-0 right-full w-full px-4 py-2 duration-300 z-[999999]" id="mobileSideMenu">
    <div class="h-screen">
        <div class="flex flex-row justify-between items-center border-b pb-2">
            <div class="logo">
                <img src="{{ asset('frontend/img/log.png') }}" width="100" alt="">
            </div>
            <button type="button" id="closeMobileMenu" class="text-gray-600 px-2 rounded-sm">
                <i class="fa-solid fa-xmark text-2xl text-red-500"></i>
            </button>
        </div>
        <div class="flex flex-col">
            @if(count($mobile_category) > 0)
                @foreach($mobile_category as $mobile_menu)
                    <div class="border-b py-1">
                        <div class="flex flex-row items-center justify-between px-1">
                            <a href="{{ route('frontend.category.page', $mobile_menu->slug) }}" class="uppercase text-[16px] font-semibold py-1">{{ $mobile_menu->name }}</a>
                            @if(count($mobile_menu->sub_category) > 0)
                                <i class="fa-solid fa-angle-down 2xl font-semibold toggle-button"></i>
                            @endif
                        </div>
                        <!-- Submenu -->
                        @if(count($mobile_menu->sub_category) > 0)
                            <div class="mobile_submenu flex flex-col pl-6" style="display: none">
                                @foreach($mobile_menu->sub_category as $mobile_sub_menu)
                                    <a href="{{ route('frontend.subcategory.page', ['category_slug' =>$mobile_menu->slug, 'subcat_slug' => $mobile_sub_menu->slug]) }}" class="text-[16px] font-semibold border-b py-1"> {{ $mobile_sub_menu->name }}</a>
                                @endforeach
                            </div>
                        @endif
                        <!-- End Submenu -->
                    </div>

                @endforeach

            @endif

        </div>
    </div>
</div>


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

        // Drop down menu
        document.addEventListener('DOMContentLoaded', function() {
            var toggleButtons = document.querySelectorAll('.toggle-button');

            toggleButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    var submenu = this.parentElement.nextElementSibling;
                    submenu.style.display = (submenu.style.display === 'none' || submenu.style.display === '') ? 'flex' : 'none';
                });
            });
        });


        // Sidebar menu
        let mobileMenuIconBars = document.getElementById('mobileMenuIconBars');
        let mobileSideMenu = document.getElementById('mobileSideMenu');

        let closeMobileMenu = document.getElementById('closeMobileMenu');

        mobileMenuIconBars.addEventListener('click', function (){
            mobileSideMenu.classList.remove('right-full')
            mobileSideMenu.classList.add('right-0')
            document.body.classList.add("overflow-hidden");
        });
        closeMobileMenu.addEventListener('click', function (){
            mobileSideMenu.classList.remove('right-0')
            mobileSideMenu.classList.add('right-full')
            document.body.classList.remove("overflow-hidden");
        });
        // Sidebar menu


</script>


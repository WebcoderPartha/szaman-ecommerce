<div class="border-b">
    <div class="header_top hidden md:block mx-auto md:w-[1560px] max-w-full px-4 py-1">
        <div class="flex flex-row justify-between items-center">
            <div><a href="">example.com</a></div>
            <div>
                <div class="header_top_list">
                    <ul class="text-center flex flex-row items-center justify-between gap-6">
                        <li>
                            <a href="#" class="header_top_list_link text-[14px] flex flex-row gap-1 items-center justify-center">
                                <i class="fa-solid fa-location-dot text-theme"></i>
                                <span class="font-semibold">Order Tracking</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+8809613332020" class="header_top_list_link text-[14px] flex flex-row gap-1 items-center justify-center">
                                <i class="fa-solid fa-phone text-theme"></i>
                                <span class="font-semibold">+880 961 333 2020</span>
                            </a>
                        </li>
                        <li>
                            @if(Auth::guard('web')->check())
                            <a href="{{ route('frontend.myaccount.page') }}" class="header_top_list_link text-[14px] bg-theme px-3 py-1 rounded text-white flex flex-row gap-1 items-center justify-center">
                                <i class="fa-solid fa-user "></i>
                                <span class="font-semibold">{{ Auth::guard('web')->user()->first_name }} {{ Auth::guard('web')->user()->last_name }}</span>
                            </a>
                            @else
                                <a href="{{ route('user_login_page') }}" class="header_top_list_link text-[14px] bg-theme px-3 py-1 rounded text-white flex flex-row gap-1 items-center justify-center">
                                    <i class="fa-solid fa-user "></i>
                                    <span class="font-semibold">Login</span>
                                </a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<header class="sticky top-0 z-50 bg-[#f7f8fa] px-2 md:px-0 hidden md:block" style="filter:drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.08))">--}}
<header id="myheader" class="bg-[#f7f8fa] px-2 md:px-0 hidden md:block" >
    <div class="mx-auto md:w-[1560px] max-w-full px-4 flex gap-6 py-2 ">
        <div class="flex items-center flex-1 gap-4 md:gap-8 justify-between relative z-[999999]">
                <span class="md:w-[160px] w-[70px]">
                    <a href="/">
                        <img src="{{ asset('/frontend/img/logo-3.png') }}" alt="">
                    </a>
                </span>
            <div class="hidden w-full px-4 md:flex ">
                <div class="w-full flex justify-center items-center z-[999999]">
                    <div class=" max-w-[719px] flex-1 relative z-[999999]">
                        <div class="flex w-full overflow-hidden rounded-sm ">
                            <div class="flex-1">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </div>
                                <input type="type" id="searchKeyword" onkeyup="searchProduct(this.value)" class="block w-full py-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg outline-none" placeholder="Search your product..." />
                            </div>

                            <button id="close_search_button" onclick="searchCloseButton()" class="absolute right-0 gap-2 p-2 px-4 hidden text-lg font-medium text-black"><i class="fa fa-close"></i></button>
                        </div>
                        <div id="ps-container" class=" search-product-container border-t hidden px-1 bg-slate-50 h-[400px] overflow-y-scroll absolute top-12 bottom-0 left-0 w-full shadow-sm">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center gap-4 ">
            <a id="header_heart" class=" transition-colors outline-1 p-1 text-red-500 text-xl" href="{{ route('frontend.wishlist.page') }}">
                <div class="flex flex-row items-center gap-1 justify-center">
                    <i class="fa-regular fa-heart"></i>
                    <span class="favorite_count text-[14px] text-black font-semibold">{{ Cart::instance('favorite')->count() > 0 ? Cart::instance('favorite')->count() : 0 }}</span>
                </div>
                <span class="sr-only">Favorite</span>
            </a>

            <a href="{{ route('frontend.cart_view') }}" class="flex md:border py-1 md:rounded-md text-black cursor-pointer items-center text-base justify-center px-2 md:max-w-[150px] gap-0 transition-colors" >
                <svg id="header_cart_svg" stroke="#eb5d1e" fill="none" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <span id="header_cart_amount" class="hidden md:inline-block text-black subTotal">00</span>&nbsp;<span id="header_currency">TK</span>
            </a>

        </div>
    </div>
</header>



<!-- Your header with dropdown -->
<header id="header_bottom" class="bg-theme relative px-2 md:px-0 hidden md:block z-[999]">
    <div class="relative z-50 mx-auto md:w-[1560px] max-w-full px-4 flex gap-6">
        <div class="flex flex-row gap-8 text-white items-center mx-auto uppercase text-[16px] font-semibold ">
            @if(count($category_menus) > 0)
                @foreach($category_menus as $category_menu)
                <div class="group">
                    <a href="{{ route('frontend.category.page', $category_menu->slug) }}" class="py-3 flex items-center gap-1">
                        {{ $category_menu->name }}
                       @if(count($category_menu->sub_category) > 0)
                            <i class="fas fa-chevron-down"></i>
                       @endif
                    </a>
                    <!-- Dropdown Menu -->
                    @if(count($category_menu->sub_category) > 0)
                        <div class="absolute w-[240px] hidden group-hover:block bg-white text-black mt-0 shadow-lg rounded">
                            @foreach($category_menu->sub_category as $sub_menu)
                                <a href="{{ route('frontend.subcategory.page', ['category_slug' =>$category_menu->slug, 'subcat_slug' => $sub_menu->slug]) }}" class="block px-4 py-2 hover:bg-gray-100 hover:pl-8 border-b duration-300">{{ $sub_menu->name }}</a>
                            @endforeach
                        </div>
                    @endif
                    <!--/ Dropdown Menu -->
                </div>
                @endforeach
            @endif
        </div>
    </div>
</header>

<!-- Swiper -->
@foreach($category_wish_products as $product_category)
    <!--:::::::::::::::::: Category Loop :::::::::::::-->
    <div class="Category-products flex flex-col gap-3 my-8">
        <div class="flex flex-row justify-center items-center border-b border-b-[#ced4da] py-2 bg-theme">
            <div class="">
                <h2 class="text-base md:text-2xl text-center font-semibold text-white px-16 uppercase"><a href="{{ route('frontend.category.page', $product_category->slug) }}"
                        href="">{{ $product_category->name }}</a></h2>
            </div>
        </div>

            {{--            <div class="swiper-slide">--}}
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-8 gap-4 items-center bg-white  py-6">

            @php
                $cat_products = \App\Models\Product::where('category_id', $product_category->id)->orderBy('id', 'DESC')->take(16)->get();
            @endphp
            @foreach($cat_products as $ct_product)
                <!-- Single Product -->
                        <div class="product-card flex flex-col text-center border-[1px] border-theme rounded-lg group">
                            <a href="{{ route('frontend.product.details', $ct_product->slug) }}" class=" product-img rounded-tl-lg rounded-tr-lg overflow-hidden relative">
                                <img class="group-hover:scale-125 duration-500 w-full" src="{{ asset('/storage/product/'.$ct_product->feature_image) }}" alt="{{ $ct_product->feature_image }}">
                                @if($ct_product->discount !== null)
                                    <div class="absolute top-0 right-0 px-2 bg-theme rounded-bl-lg">
                            <span class=" text-white text-xs">
                                <span class="font-bold">Flat {{$ct_product->discount}}% Off</span>
                            </span>
                                    </div>
                                @endif

                                <div class="cart-favorite flex flex-col">
                                    <!-- Wishlist Icon -->
                                    <button id="{{ $ct_product->id }}" onclick="add_to_favorite(event, this.id)" class="wishlist_button absolute top-6 -right-10 group-hover:right-0 duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none" class=""><g filter="url(#filter0_d_22:4264)"><circle cx="23" cy="23" r="13" fill="white"></circle></g><path d="M28.8931 18.0733C28.5526 17.7327 28.1483 17.4624 27.7033 17.2781C27.2584 17.0937 26.7814 16.9988 26.2998 16.9988C25.8181 16.9988 25.3412 17.0937 24.8962 17.2781C24.4512 17.4624 24.0469 17.7327 23.7064 18.0733L22.9998 18.78L22.2931 18.0733C21.6053 17.3855 20.6724 16.9991 19.6998 16.9991C18.7271 16.9991 17.7942 17.3855 17.1064 18.0733C16.4186 18.7611 16.0322 19.694 16.0322 20.6667C16.0322 21.6394 16.4186 22.5722 17.1064 23.26L17.8131 23.9667L22.9998 29.1533L28.1864 23.9667L28.8931 23.26C29.2337 22.9195 29.504 22.5152 29.6884 22.0702C29.8727 21.6253 29.9676 21.1483 29.9676 20.6667C29.9676 20.185 29.8727 19.7081 29.6884 19.2631C29.504 18.8181 29.2337 18.4138 28.8931 18.0733V18.0733Z" stroke="#565656" stroke-linecap="round" stroke-linejoin="round"></path><defs><filter id="filter0_d_22:4264" x="0" y="0" width="46" height="46" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix><feOffset></feOffset><feGaussianBlur stdDeviation="5"></feGaussianBlur><feColorMatrix type="matrix" values="0 0 0 0 0.764706 0 0 0 0 0.764706 0 0 0 0 0.764706 0 0 0 0.1 0"></feColorMatrix><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_22:4264"></feBlend><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_22:4264" result="shape"></feBlend></filter></defs>
                                        </svg>
                                    </button>
                                    <!-- Wishlist Icon -->
                                    <!-- Add to cart icon -->
                                    <button id="{{ $ct_product->id }}" onclick="add_to_carts(event, this.id)" class="add_to_cart_button absolute top-14 -right-20 group-hover:right-0 duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="47" viewBox="0 0 46 47" fill="none" class=" "><g filter="url(#filter0_d_22:4269)"><circle cx="23" cy="23.3333" r="13" fill="white"></circle></g><path d="M19 16.6665L17 19.3332V28.6665C17 29.0201 17.1405 29.3593 17.3905 29.6093C17.6406 29.8594 17.9797 29.9998 18.3333 29.9998H27.6667C28.0203 29.9998 28.3594 29.8594 28.6095 29.6093C28.8595 29.3593 29 29.0201 29 28.6665V19.3332L27 16.6665H19Z" stroke="#565656" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17 19.3333H29" stroke="#565656" stroke-linecap="round" stroke-linejoin="round"></path><path d="M25.6663 22C25.6663 22.7072 25.3854 23.3855 24.8853 23.8856C24.3852 24.3857 23.7069 24.6667 22.9997 24.6667C22.2924 24.6667 21.6142 24.3857 21.1141 23.8856C20.614 23.3855 20.333 22.7072 20.333 22" stroke="#565656" stroke-linecap="round" stroke-linejoin="round"></path><defs><filter id="filter0_d_22:4269" x="0" y="0.333252" width="46" height="46" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix><feOffset></feOffset><feGaussianBlur stdDeviation="5"></feGaussianBlur><feColorMatrix type="matrix" values="0 0 0 0 0.764706 0 0 0 0 0.764706 0 0 0 0 0.764706 0 0 0 0.1 0"></feColorMatrix><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_22:4269"></feBlend><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_22:4269" result="shape"></feBlend></filter></defs>
                                        </svg>
                                    </button>
                                    <!-- Add to cart icon -->
                                </div>
                            </a>
                            <div class="product-price-info flex flex-col gap-2 py-2 items-center min-h-[125px]">
                                <a class="min-h-[44px]" href="{{ route('frontend.product.details', $ct_product->slug) }}"><h2 class="text-[14px] group-hover:text-theme font-semibold duration-500 px-2">{{ Str::limit($ct_product->title, 40) }}</h2></a>
                                <div class="product_price">
                                    @if($ct_product->discount !== null)
                                        <div class="flex flex-row gap-2 items-center justify-center">
                                            <div class="flex flex-row justify-center items-center gap-x-0.5 text-[12px] font-bold line-through">
                                                <span> TK</span><span>{{$ct_product->unit_price}}</span>
                                            </div>

                                            <div class="text-[13px] text-theme font-bold flex items-center">
                                                <span> TK </span><span>&nbsp;{{$ct_product->discount_price}}</span>
                                            </div>
                                        </div>
                                    @else
                                        <div class="flex justify-center">
                                            <div class="text-[13px] text-theme font-bold flex items-center">
                                                <span> TK </span><span>&nbsp;{{$ct_product->unit_price}}</span>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="product-rating flex flex-row gap-1 mt-2 text-theme">
                                        @for($i = 0; $i< 5; $i++)
                                            <svg fill="currentColor" width="16" height="16" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!--/ Single Product -->
                @endforeach
        </div>
        <div class="flex items-center justify-center">
            <a href="{{ route('frontend.category.page', $product_category->slug) }}" class="border border-theme px-4 py-1 uppercase rounded font-semibold text-black hover:bg-theme hover:text-white">View All</a>
        </div>
    </div>
    <!--:::::::::::::::::: Category Loop :::::::::::::-->
@endforeach


<!-- Swiper -->


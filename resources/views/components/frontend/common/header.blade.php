<header class="sticky top-0 z-50 bg-[#eb5d1e] px-2 md:px-0 hidden md:block" style="filter:drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.08))">
    <div class="mx-auto md:w-[1560px] max-w-full px-4 flex gap-6 py-2">
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
            <a class="relative transition-colors outline-1 p-1 text-white" href="{{ route('frontend.cart_view') }}">
                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <span class="sr-only">Cart</span>
            </a>
            <a class="inline-flex md:border py-2 md:rounded-md text-white cursor-pointer items-center text-base justify-center md:w-[120px] gap-2 transition-colors" href="{{ route('user_login_page') }}">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z">
                    </path>
                </svg>
                <span class="hidden md:inline-block">Sign in</span>
                <span class="sr-only">Sign in</span>
            </a>
        </div>
    </div>
</header>

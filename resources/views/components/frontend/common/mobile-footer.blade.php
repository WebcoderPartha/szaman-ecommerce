<div class="fixed_footer_menu md:hidden fixed bottom-0 left-0 right-0 w-full bg-white drop-shadow border-t">
    <ul class="flex flex-row justify-between items-center text-center px-4 pb-1 pt-3">
        <li>
            <a href="{{ route('frontend.home_page') }}" class="fixed_footer_menu_link flex flex-col">
                <i class="fa-solid fa-house-chimney text-theme text-[18px]"></i>
                <span class="p-0 m-0 text-sm">Home</span>
            </a>
        </li>
        <li>
            <a href="https://mohasagor.com/wish-list" class="fixed_footer_menu_link relative  flex flex-col">
                <i class="fa-regular fa-heart text-theme text-[18px]"></i>
                <span class="p-0 m-0 text-sm">Wishlist</span>
                <span class="fixed_footer_wishlist_count wish_list_count absolute -top-2 right-2 bg-black rounded-full w-4 h-4 flex items-center justify-center text-white text-xs">0</span>
            </a>
        </li>
        <li>
            <a  href="" class="fixed_footer_menu_link relative flex flex-col">
                <i class="fa-solid fa-cart-shopping text-theme text-[18px]"></i>
                <span class="p-0 m-0 text-sm">Cart</span>
                <span class="fixed_footer_cart_count cart_item_total absolute -top-2 -right-1 bg-black rounded-full w-4 h-4 flex items-center justify-center text-white text-xs">7</span>
            </a>
        </li>
        <li>
            <a href="tel:+8809613332020" class="fixed_footer_menu_link  flex flex-col">
                <i class="fa-solid fa-phone text-theme text-[18px]"></i>
                <span class="p-0 m-0 text-sm">Call</span>
            </a>
        </li>
        <li>
            <a href="{{route('user_login_page')}}" class="fixed_footer_menu_link  flex flex-col">
                <i class="fa-regular fa-user text-theme text-[18px]"></i>
                <span class="p-0 m-0 text-sm">Account</span>
            </a>
        </li>
    </ul>
</div>

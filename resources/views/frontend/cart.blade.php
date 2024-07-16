@extends('frontend.layout.app')
@section('title', 'Cart')
@section('content')
    <div class="cart-container py-3 md:py-6 mb-6">
        <div class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-9 md:pr-4 mb-6 md:mb-0">
                <div class="cart-list bg-white shadow-lg px-6 py-0 md:py-6">
                    <div class="cart-header py-4 border-b border-[#EEEEEE]">
                        <h2 class="text-xl font-bold">My Cart (<span class="mycartqty"></span>)</h2>
                    </div>
                    <div class="cartPageContent">

                    </div>
{{--                    @if(count(Cart::instance('shopping')->content()) > 0)--}}
{{--                        @foreach(Cart::instance('shopping')->content() as $cartItem)--}}
{{--                            <!-- Cart Item -->--}}
{{--                                <div class="cart-item py-4 grid grid-cols-12 gap-4 border-b border-[#EEEEEE]">--}}
{{--                                    <div class="col-span-12 md:col-span-8">--}}
{{--                                        <div class="flex flex-row gap-6">--}}
{{--                                            <div class="item-image">--}}
{{--                                                <img src="{{ asset('/storage/product/'.$cartItem->options->image) }}" alt="" class="w-32 border rounded">--}}
{{--                                            </div>--}}

{{--                                            <div class=" flex flex-col justify-between">--}}
{{--                                                <div class="items-title">--}}
{{--                                                    <h2>{{ $cartItem->name }} </h2>--}}
{{--                                                </div>--}}
{{--                                                <div class="hidden md:block remove_button uppercase font-semibold cursor-pointer hover:text-theme">--}}
{{--                                                    Remove--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-span-12 md:col-span-4">--}}
{{--                                        <div class="flex flex-row items-center justify-between">--}}
{{--                                            <div class="view_cart_price">--}}
{{--                                                <span>{{ $cartItem->price }} TK</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">--}}
{{--                                                <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">--}}
{{--                                                    <i class="fa-solid fa-minus"></i>--}}
{{--                                                </div>--}}
{{--                                                <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="{{ $cartItem->qty }}">--}}
{{--                                                <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">--}}
{{--                                                    <i class="fa-solid fa-plus"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-span-12">--}}
{{--                                        <div class="md:hidden block text-center remove_button uppercase font-semibold cursor-pointer hover:text-theme">--}}
{{--                                            Remove--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!--/ Cart Item -->--}}
{{--                        @endforeach--}}

{{--                        @else--}}
{{--                            <h2>Empty Cart</h2>--}}
{{--                        @endif--}}
                </div>
            </div>
            <div class="col-span-12 md:col-span-3">
                <div class="product_shipping px-6 py-6 bg-white shadow-md sticky top-20">
                    <div class="text-2xl pb-3 border-b">
                        <h2>Order Summary</h2>
                    </div>
                    <div class="view_cart_subtotal flex justify-between items-center text-xl border-b py-3">
                        <strong>Subtotal</strong>
                        <strong><span class="subTotal">{{ Cart::instance('shopping')->subtotal() }}</span> TK</strong>
                    </div>

                    <div class="view_cart_shipping_content">
                        <!-- <div class="product_shipping-title py-3">
                            <h6 class="text-[16px] font-semibold">Calculate Shipping</h6>
                        </div>

                       <div class="shipping_option_group flex flex-col gap-2 pb-4 border-b">

                            <div class="shipping_option_item inline-flex items-center gap-2">
                                <label class="relative flex items-center rounded-full cursor-pointer">
                                    <input type="radio"
                                           class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-theme transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-theme checked:bg-theme checked:before:bg-theme "
                                           id="inside_dhaka" name="shipping_charge" />
                                    <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </label>
                                <label for="inside_dhaka" class="cursor-pointer">
                                    Inside Dhaka:
                                    <span>60 TK</span>
                                </label>
                            </div>

                            <div class="shipping_option_item inline-flex items-center gap-2">
                                <label class="relative flex items-center rounded-full cursor-pointer">
                                    <input type="radio"
                                           class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-theme transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-theme checked:bg-theme checked:before:bg-theme "
                                           id="outside_dhaka" name="shipping_charge" />
                                    <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </label>
                                <label for="outside_dhaka" class="cursor-pointer">
                                    Outside Dhaka:
                                    <span>120 TK</span>
                                </label>
                            </div>

                        </div> -->

                    <!--<div class="view_cart_total flex flex-row items-center justify-between text-xl py-4">
                            <strong>Total</strong>
                            <strong><span class="total_amount">{{ Cart::instance('shopping')->total() }}</span> TK</strong>
                        </div> -->

                        <div class="view_cart_process_checkout">
                            <a href="{{ route('frontend.checkout_view') }}" class="view_cart_process_checkout_link bg-theme inline-block w-full text-white text-[18px] py-3 text-center font-semibold rounded border border-theme hover:bg-transparent hover:text-theme duration-300">Check Out</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection

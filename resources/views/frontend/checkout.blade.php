@extends('frontend.layout.app')
@section('title', 'Checkout')
@section('content')
    <div class="cart-container py-3 md:py-16">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 md:col-span-6 bg-white shadow-lg p-6">
                <div class="customer_info text-center text-2xl">
                    <h2>Customer Information</h2>
                </div>
                <div class="form_customer">
                    <div class="flex flex-col gap-1 py-2">
                        <label for="full_name">Full Name</label>
                        <input type="text" id="full_name" name="full_name" class="focus:outline-none border border-theme px-2 py-2 rounded-md" placeholder="Your name">
                    </div>
                    <div class="flex flex-col gap-1 py-2">
                        <label for="mobile_number">Mobile Number</label>
                        <input type="text" id="mobile_number" name="mobile_number" class="focus:outline-none border border-theme px-2 py-2 rounded-md" placeholder="Mobile number">
                    </div>
                    <div class="flex flex-col gap-1 py-2">
                        <label for="area">Your Area</label>
                        <select name="area" id="area" class="focus:outline-none border border-theme px-2 py-2 rounded-md">
                            <option value="">--Select your area--</option>
                            <option value="">Inside Dhaka</option>
                            <option value="">Outside Dhaka</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-1 py-2">
                        <label for="full_address">Full Address</label>
                        <textarea name="full_address" id="full_address" class="focus:outline-none border border-theme px-2 py-2 rounded-md" placeholder="Village, union. thaka, district" cols="10" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 bg-white shadow-lg p-6">
                <div class="customer_info text-center text-xl md:text-2xl pb-4 md:pb-2">
                    <h2 >Order Summary</h2>
                </div>
                <div class="Order summary">
                    <!-- Loop Item -->
                    <div class="grid grid-cols-12 gap-4 md:gap-0 border-b py-2">
                        <div class="col-span-3">
                            <img src="https://mohasagor.com/public/storage/images/product_thumbnail_img/thumbnail_1717475472_7548.jpg" width="80" height="80" alt="">
                        </div>
                        <div class="col-span-9">
                            <div class="flex flex-col w-full gap-1">
                                <div class="flex justify-between gap-4">
                                    <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                    <a class="card_remove text-red-600 cursor-pointer ">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                                <div class="fixed_product_card_size">
                                    <strong>Size:</strong>
                                    <span>S</span>
                                </div>
                                <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                    <!-- fixed product cart quantity start -->
                                    <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                        <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                        <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                    <!-- fixed product cart quantity end -->
                                    <!-- fixed product cart price start -->
                                    <div class="fixed_product_card_close_price">
                                        <p>550 TK</p>
                                    </div>
                                    <!-- fixed product cart price end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Loop Item -->
                    <!-- Loop Item -->
                    <div class="grid grid-cols-12 gap-4 md:gap-0 border-b py-2">
                        <div class="col-span-3">
                            <img src="https://mohasagor.com/public/storage/images/product_thumbnail_img/thumbnail_1717475472_7548.jpg" width="80" height="80" alt="">
                        </div>
                        <div class="col-span-9">
                            <div class="flex flex-col w-full gap-1">
                                <div class="flex justify-between gap-4">
                                    <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                    <a class="card_remove text-red-600 cursor-pointer ">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                                <div class="fixed_product_card_size">
                                    <strong>Size:</strong>
                                    <span>S</span>
                                </div>
                                <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                    <!-- fixed product cart quantity start -->
                                    <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                        <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                        <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                    <!-- fixed product cart quantity end -->
                                    <!-- fixed product cart price start -->
                                    <div class="fixed_product_card_close_price">
                                        <p>550 TK</p>
                                    </div>
                                    <!-- fixed product cart price end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Loop Item -->
                    <!-- Loop Item -->
                    <div class="grid grid-cols-12 gap-4 md:gap-0 border-b py-2">
                        <div class="col-span-3">
                            <img src="https://mohasagor.com/public/storage/images/product_thumbnail_img/thumbnail_1717475472_7548.jpg" width="80" height="80" alt="">
                        </div>
                        <div class="col-span-9">
                            <div class="flex flex-col w-full gap-1">
                                <div class="flex justify-between gap-4">
                                    <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                    <a class="card_remove text-red-600 cursor-pointer ">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                                <div class="fixed_product_card_size">
                                    <strong>Size:</strong>
                                    <span>S</span>
                                </div>
                                <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                    <!-- fixed product cart quantity start -->
                                    <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                        <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                        <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                    <!-- fixed product cart quantity end -->
                                    <!-- fixed product cart price start -->
                                    <div class="fixed_product_card_close_price">
                                        <p>550 TK</p>
                                    </div>
                                    <!-- fixed product cart price end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Loop Item -->
                </div>
                <div class="price_summary mt-4">
                    <div class="sub_total flex flex-row justify-between items-center border-b py-2 font-semibold">
                        <span>Sub Total :</span>
                        <span>1333 Tk</span>
                    </div>
                    <div class="shipping_charge flex flex-row justify-between items-center border-b py-2 font-semibold">
                        <span>Shipping Charge :</span>
                        <span>60 Tk</span>
                    </div>
                    <div class="discount_amount flex flex-row justify-between items-center border-b py-2 font-semibold">
                        <span>Discount Amount :</span>
                        <span>0 Tk</span>
                    </div>
                    <div class="discount_amount flex flex-row justify-between items-center border-b py-2 font-semibold">
                        <span>Payable Amount :</span>
                        <span>1200 Tk</span>
                    </div>
                </div>
                <div class="payment_method flex flex-row items-center justify-center gap-4 pt-6 pb-4">
                    <a href="#" class="px-4 py-1 bg-black text-white font-bold">COD</a>
                    <a href="#" class="px-4 py-1 bg-theme text-white font-bold">Online Payment</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection

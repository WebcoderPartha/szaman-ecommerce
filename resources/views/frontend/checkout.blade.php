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
                <div class="customer_info text-center text-2xl">
                    <h2>Order Summary</h2>
                </div>
                <div class="Order summary">
                    <table class="table ">
                        <thead>
                        <tr>
                            <th class="checkout_product_td_left">Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th class="checkout_product_th_total_price">Total Price</th>
                            <th class="checkout_product_td_right">Action</th>
                        </tr>
                        </thead>
                        <tbody id="check_out_carts">
                        <tr>
                            <td class="checkout_product_td_left">
                                <div class="checkout_product_name_image flex flex-row gap-2">
                                    <img width="30" src="https://mohasagor.com/public/storage/images/product_thumbnail_img/thumbnail_1719051299_2605.jpg" alt="images/product_thumbnail_img/thumbnail_1719051299_2605.jpg">
                                    <p>Hurricane USB China 360 degree Light</p>
                                </div>
                            </td>
                            <td>
                                <div class="checkout_product_qty">
                                    <button id="e1e9b08f90cfe4b387f8fd5d0073b4ad" onclick="cartDecrement(this.id)" class="checkout_product_qty_minus">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                    <input type="text" class="product_qty" value="1">
                                    <button id="e1e9b08f90cfe4b387f8fd5d0073b4ad" onclick="cartIncrement(this.id)" class="checkout_product_qty_plus">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="checkout_product_price">
                                    <p>1090 TK</p>
                                </div>
                            </td>
                            <td>
                                <div class="checkout_product_total_price">
                                    <p>1090 TK</p>
                                </div>
                            </td>
                            <td>
                                <div class="checkout_product_delete_icon">
                                    <button id="e1e9b08f90cfe4b387f8fd5d0073b4ad" onclick="miniCartRemove(this.id)" class="checkout_product_delete_icon_link">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection

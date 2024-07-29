@extends('frontend.layout.app')
@section('title', 'Checkout')
@section('content')
    <div class="cart-container py-3 md:py-16">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 md:col-span-6 bg-white shadow-lg p-6">
                <div class="flex flex-col gap-6" id="shipping_container">
                    <div class="billing_container border border-theme my-4 relative">
                        <div class="customer_info text-center text-2xl bg-white w-[35%] mx-auto absolute -top-[18px] left-[230px]">
                            <h2>Billing Information</h2>
                        </div>
                        <div class="billing_information text-center my-8 italic font-semibold">
                            <h1 class="text-xl">{{ $customer->first_name }} {{ $customer->last_name }}</h1>
                            <p>{{ $customer->phone }}</p>
                        </div>

                    </div>
                    <div class="billing_container border border-theme my-4 relative ">
                        <div class="customer_info text-center text-2xl bg-white w-[35%] mx-auto absolute -top-[18px] left-[230px]">
                            <h2>Shipping Address</h2>
                        </div>
                        <span onclick="shippingAddress()" class="absolute top-0 right-0 bg-theme text-white px-3 py-1 cursor-pointer"><i class="far fa-edit"></i></span>
                        <div class="billing_information text-center my-8 italic font-semibold">
                            <h1 class="text-xl">{{ $customer->first_name }} {{ $customer->last_name }}</h1>
                            <p>{{ $customer->phone }}</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1 py-2">
                        <label for="area">Delivery Area</label>
                        <select name="area" id="area" class="focus:outline-none border border-gray-300 px-2 py-2 rounded-md">
                            <option value="">--Select delivery area--</option>
                            @foreach($shipping_charge as $charge)
                                <option value="{{ $charge->amount }}">{{ $charge->shipping_charge_name }}</option>
                            @endforeach
                        </select>
                        <small id="err_area" class="text-red-500"></small>
                    </div>
                </div>
                <div class="customer_form hidden" id="address_form">
                    <div class="flex flex-col gap-1 py-2">
                        <label for="address_line_one">House/Flat/Road</label>
                        <input type="text" id="address_line_one" class="focus:outline-none border border-gray-300 px-2 py-2 rounded-md" placeholder="House/Flat/Road">
                        <small id="err_address_line_one" class="text-red-500"></small>
                    </div>
                    <div class="flex flex-col gap-1 py-2">
                        <label for="post_office">Post Office</label>
                        <input type="text" id="post_office" class="focus:outline-none border border-gray-300 px-2 py-2 rounded-md" placeholder="Enter post office">
                        <small id="err_post_office" class="text-red-500"></small>
                    </div>
                    <div class="flex flex-col gap-1 py-2">
                        <label for="thana">Thana</label>
                        <input type="text" id="thana" class="focus:outline-none border border-gray-300 px-2 py-2 rounded-md" placeholder="Enter thana">
                        <small id="err_thana" class="text-red-500"></small>
                    </div>
                    <div class="flex flex-col gap-1 py-2">
                        <label for="postal_code">Postal Code</label>
                        <input type="text" id="postal_code" class="focus:outline-none border border-gray-300 px-2 py-2 rounded-md" placeholder="Enter postal code">
                        <small id="err_postal_code" class="text-red-500"></small>
                    </div>
                    <div class="flex flex-col gap-1 py-2">
                        <label for="district">District</label>
                        <input type="text" id="district" class="focus:outline-none border border-gray-300 px-2 py-2 rounded-md" placeholder="Enter district">
                        <small id="err_district" class="text-red-500"></small>
                    </div>
                    <div class="payment_method flex flex-row items-center justify-center gap-4 pt-6 pb-4">
                        <a href="javascript:void(0)" class="px-4 py-1 bg-black text-white font-bold" onclick="cancelShippingAddress()">Cancel</a>
                        <a href="#" class="px-4 py-1 bg-theme text-white font-bold">Update</a>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 bg-white shadow-lg p-6">
                <div class="customer_info text-center text-xl md:text-2xl pb-4 md:pb-2">
                    <h2 >Order Summary</h2>
                </div>
                <div class="checkout_summary">

                    <!-- Loop Item
                    <div class="grid grid-cols-12 gap-4 md:gap-0 border-b py-2">
                        <div class="col-span-9">
                            <div class="flex flex-row gap-4 ">
                                <img src="https://mohasagor.com/public/storage/images/product_thumbnail_img/thumbnail_1717475472_7548.jpg" width="40" height="40" alt="">
                                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                <span class="font-semibold"><small>500x2</small></span>
                            </div>
                        </div>
                        <div class="col-span-3">
                            <p class="text-right">550 TK</p>
                        </div>
                    </div> -->
                </div>
                <div class="price_summary mt-4">
                    <div class="sub_total flex flex-row justify-between items-center border-b py-2 font-semibold">
                        <span>Sub Total :</span>
                        <span><span class="subTotal"></span> Tk</span>
                    </div>
                    <div class="shipping_charge flex flex-row justify-between items-center border-b py-2 font-semibold">
                        <span>Shipping Charge :</span>
                        <span><span id="shipping_charge">0</span> Tk</span>
                    </div>
                    <div class="discount_amount flex flex-row justify-between items-center border-b py-2 font-semibold">
                        <span>Discount Amount :</span>
                        <span>0 Tk</span>
                    </div>
                    <div class="discount_amount flex flex-row justify-between items-center border-b py-2 font-semibold">
                        <span>Payable Amount :</span>
                        <span><span id="paypalAmount"></span> Tk</span>
                    </div>
                </div>
                <div class="payment_method flex flex-row items-center justify-center gap-4 pt-6 pb-4">
                    <a href="javascript:void(0)" class="px-4 py-1 bg-black text-white font-bold" onclick="order()">COD</a>
                    <a href="#" class="px-4 py-1 bg-theme text-white font-bold">Online Payment</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script>

        //================= get cart items ============== //
        const getCheckOutContent = () => {
            axios.get("{{route('frontend.getcarts')}}").then(getCheckoutContRes => {
                let checkoutCarts = Object.values(getCheckoutContRes.data.cart);
                // console.log(getCheckoutContRes.data)
                if (checkoutCarts?.length > 0){
                    let checkOutItems = '';
                    checkoutCarts.forEach(cartItems => {
                        // fixedCatItems +='<div class="grid grid-cols-12 border-b pb-1"><div class="col-span-3"><img src="/storage/product/'+cartItems.options.image+'" width="80" height="80" alt=""/></div><div class="col-span-9"><div class="flex flex-col w-full gap-1"><div class="flex justify-between gap-4"><h3>'+cartItems.name+'</h3> <a class="card_remove text-red-600 cursor-pointer" id="'+cartItems.rowId+'" onclick="cartRemove(this.id)" > <i class="fa-solid fa-trash"></i></a></div><div class="fixed_product_card_qty_price flex flex-row items-center justify-between"><div class="fixed_product_card_close_price"><p>'+ cartItems.subtotal +' TK</p></div></div></div></div></div>'
                        checkOutItems +='<div class="grid grid-cols-12 gap-4 md:gap-0 border-b py-2"><div class="col-span-9"><div class="flex flex-row gap-4 "><img src="/storage/product/'+cartItems.options.image+'" width="40" height="40" alt=""><h3>'+cartItems.name+'</h3><span class="font-semibold"><small>'+cartItems.price+' x '+cartItems.qty+'</small></span></div></div><div class="col-span-3"><p class="text-right">'+cartItems.subtotal+' TK</p></div></div>'
                    })
                    $('.checkout_summary').html(checkOutItems);
                    $('#fix_subtotal_price').text(getCheckoutContRes.data.subtotal);
                    $('.subTotal').text(getCheckoutContRes.data.subtotal.replace(/,/g, ''));
                    $('.item_count').text(getCheckoutContRes.data.total_qty);
                    $('#shipping_charge').text(getCheckoutContRes.data.shipping_charge);
                    $('#paypalAmount').text(parseInt(getCheckoutContRes.data.subtotal.replace(/,/g, '')) + parseInt(getCheckoutContRes.data.shipping_charge))
                }else {
                    $('#fix_subtotal_price').text("0.00")
                    $('.item_count').text(0)
                    $('.subTotal').text('0.00');
                    $('#paypalAmount').text('0.00')
                    $('.checkout_summary').html('<h2 class="text-center text-xl">Cart Empty!</h2>')
                }
            })
        }
        getCheckOutContent();
        //================= get cart items ============== //

        const area = document.getElementById('area');
        area.addEventListener('change', function (event){
            let shipping = event.target.value
            // console.log()

            axios.post('/shippingcharge', {amount: parseInt(shipping)}).then(shippingRes => {
                // console.log(shippingRes.data)
                let shipping_charge = parseInt(shippingRes.data.price)
                $('#shipping_charge').text(shippingRes.data.price);
                let subtotalClass = document.getElementsByClassName('subTotal')[0].innerText
                let subtotal = parseFloat(subtotalClass.replace(/,/g, ''))
                // console.log(subtotal)
                $('#paypalAmount').text(subtotal + shippingRes.data.price)
            })
        });

        const order = () => {
            // toastr.success('sdfsdf');
            let name = $('#full_name').val();
            let email = $('#email').val();
            let password = $('#password').val();
            let mobile_number = $('#mobile_number').val();
            let area = $('#area').val();
            let full_address = $('#full_address').val();
            if (!name?.length > 0){
                $('#err_full_name').text('Full name is required!');
            }else if(!email?.length > 0){
                $('#err_email').text('Email is required!');
            }else if(!password?.length > 0){
                $('#err_password').text('Password is required!');
            }else if(!mobile_number?.length > 0){
                $('#err_mobile_number').text('Mobile number is required!');
            }else if(!area?.length > 0){
                $('#err_area').text('Area is required!');
            }else if(!full_address?.length > 0){
                $('#err_full_address').text('Full address is required!');
            }else{
                toastr.success('Order Success!!');
                axios.post('{{route('frontend.ordernow')}}', {name: 'ok'}).then(orderRes => {
                    console.log(orderRes.data)
                })
            }

        }


        let shipping_container = document.getElementById('shipping_container')
        let address_form = document.getElementById('address_form')

        // ==================== Shipping Address Method ================= //
        function shippingAddress(){
            shipping_container.classList.add('hidden')
            address_form.classList.remove('hidden')
        }

        // ==================== Cancel Shipping Address Method ================= //
        function cancelShippingAddress(){
            shipping_container.classList.remove('hidden')
            address_form.classList.add('hidden')
        }

    </script>



@endsection

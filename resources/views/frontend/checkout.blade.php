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
                        <input type="text" id="full_name" name="full_name" class="focus:outline-none border border-gray-300 px-2 py-2 rounded-md" placeholder="Your name">
                    </div>
                    <div class="flex flex-col gap-1 py-2">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="focus:outline-none border border-gray-300 px-2 py-2 rounded-md" placeholder="Your email">
                    </div>
                    <div class="flex flex-col gap-1 py-2">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="focus:outline-none border border-gray-300 px-2 py-2 rounded-md" placeholder="******">
                    </div>
                    <div class="flex flex-col gap-1 py-2">
                        <label for="mobile_number">Mobile Number</label>
                        <input type="text" id="mobile_number" name="mobile_number" class="focus:outline-none border border-gray-300 px-2 py-2 rounded-md" placeholder="Mobile number">
                    </div>
                    <div class="flex flex-col gap-1 py-2">
                        <label for="area">Your Area</label>
                        <select name="area" id="area" class="focus:outline-none border border-gray-300 px-2 py-2 rounded-md">
                            <option value="">--Select your area--</option>
                            @foreach($shipping_charge as $charge)
                                <option value="{{ $charge->amount }}">{{ $charge->shipping_charge_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col gap-1 py-2">
                        <label for="full_address">Full Address</label>
                        <textarea name="full_address" id="full_address" class="focus:outline-none border border-gray-300 px-2 py-2 rounded-md" placeholder="Village, union. thaka, district" cols="10" rows="3"></textarea>
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
                    <a href="#" class="px-4 py-1 bg-black text-white font-bold" onclick="order()">COD</a>
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
                console.log(getCheckoutContRes.data)
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
            alert('ok');
        }

    </script>



@endsection

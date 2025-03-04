@extends('frontend.layout.app')
@section('title', 'Order Tracking')
@section('content')

        <div class="max-w-[800px] mx-auto bg-slate-100 shadow-md py-6 px-8 mt-10 mb-8">
            <div class="flex flex-col gap-2">
                <h2>TRACK YOUR CONSIGNMENT</h2>
                <div class="flex flex-row items-center">
                    <input id="track_id" type="text" class="block w-full py-3 px-4 text-sm text-gray-900 border border-theme outline-none" placeholder="Enter order id">
                    <button type="button" onclick="trackOrder()" class="bg-theme text-white px-4 py-[11px]">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                <div class="mt-4 border-t border-gray-300" id="order_track">

                </div>
            </div>
        </div>

        <script>
            function trackOrder(){
               let track_id = document.getElementById('track_id').value;
               if (track_id.length > 0){



                   axios.post('{{route('frontend.get_track_order_by_id')}}', {
                       order_id: track_id
                   }).then(trackRes => {
                       if (trackRes.data.success){
                           let orderStatus = '';
                           if (trackRes.data.success.order_status == 0){
                               orderStatus = 'Initiated';
                           }else if (trackRes.data.success.order_status == 1){
                               orderStatus = 'Confirmed';
                           }else if (trackRes.data.success.order_status == 2){
                               orderStatus = 'Processing';
                           }else if (trackRes.data.success.order_status == 3){
                               orderStatus = 'Picked';
                           }else if (trackRes.data.success.order_status == 4){
                               orderStatus = 'Shipped'
                           }else if (trackRes.data.success.order_status == 5){
                               orderStatus = 'Delivered'
                           }else if (trackRes.data.success.order_status == 6){
                               orderStatus = 'Cancelled'
                           }else if (trackRes.data.success.order_status == 7){
                               orderStatus = 'Refunded'
                           }else {
                               orderStatus = 'Returned'
                           }
                           $('#order_track').html(`
                                    <div>
                                        <div class="bg-gray-300 py-2 text-center uppercase font-semibold mb-2">
                                            Track Information
                                        </div>
                                        <div class="flex item items-center justify-between">
                                            <div class="flex flex-col gap-1">
                                                <p>${trackRes.data.success.order_date}</p>
                                                <p><b>Invoice No :</b> ${trackRes.data.success.order_number}</p>
                                                <p><b>Address :</b>${trackRes.data.success.shipping_address.address_line_one},<br>
                                                ${trackRes.data.success.shipping_address.post_office}, ${trackRes.data.success.shipping_address.thana} <br>
                                                ${trackRes.data.success.shipping_address.district}-${trackRes.data.success.shipping_address.postal_code}
                                                </p>
                                                <p><b>Mobile :</b> ${trackRes.data.success.shipping_address.phone}</p>
                                            </div>
                                            <div class="flex flex-col gap-2">
                                                <h2>${trackRes.data.success.payment_method == 1 ? 'Online' : 'COD'}: ${trackRes.data.success.payable_amount} Tk</h2>
                                                <div class="bg-theme rounded-2xl text-white px-2 py-1 text-center">${orderStatus}</div>
                                            </div>
                                        </div>
                                    </div>
                                `)
console.log(trackRes.data.success)
                       }else{
                           $('#order_track').html(trackRes.data.error)
                       }
                   })

               }else{
                   toastr.error('Please enter order id');
               }

            }
        </script>

@endsection


@extends('frontend.layout.app')
@section('title', 'Wishlist')
@section('content')

        <div class="max-w-[800px] mx-auto bg-slate-100 shadow-md py-6 px-8 mt-10 mb-8">
            <div class="flex flex-col gap-2">
                <h2>TRACK YOUR CONSIGNMENT</h2>
                <div class="flex flex-row items-center">
                    <input type="text" class="block w-full py-3 px-4 text-sm text-gray-900 border border-theme outline-none" placeholder="Enter order id">
                    <button type="submit" class="bg-theme text-white px-4 py-[11px]">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                <div class="mt-4 border-t border-gray-300">
                    <div class="bg-gray-300 py-2 text-center uppercase font-semibold mb-2">
                        Track Information
                    </div>
                    <div class="flex item items-center justify-between">
                        <div class="flex flex-col gap-1">
                            <p>2024/Aug/14 17:08 pm</p>
                            <p><b>Invoice No :</b> 1944</p>
                            <p><b>Address :</b> 93 Kazi Nazrul Islam Avenue, Northern<br> University Building (5th Floor), Kawran Bazar, Dhaka-1215</p>
                            <p><b>Mobile :</b> 01710147887</p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h2>Online: 420 Tk</h2>
                            <div class="bg-theme rounded-2xl text-white px-2 py-1 text-center">Shipment</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


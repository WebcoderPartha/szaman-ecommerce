
<!-- Swiper -->
<!--:::::::::::::::::: Category Loop :::::::::::::-->
<div class="feature-products flex flex-col gap-3 my-8">
    <div class="flex flex-row justify-center items-center border-theme border-b border-t py-2">
        <div class="">
            <h2 class="text-base md:text-2xl text-center font-semibold text-theme px-16 uppercase">BRANDS</h2>
        </div>
    </div>
    <div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-1">
        @foreach($brands as $brand)
            <a href="{{ route('frontend.brand.page', $brand->id) }}" class="border border-theme flex items-center justify-center p-4">
                <img src="{{ asset('storage/brand/'.$brand->image) }}" class="w-full" alt="">
            </a>
        @endforeach
    </div>
</div>
<!--:::::::::::::::::: Category Loop :::::::::::::-->

<!-- Swiper -->

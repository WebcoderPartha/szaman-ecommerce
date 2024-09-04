@extends('frontend.layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="grid grid-cols-1 mt-2">
            <!-- Swiper -->
            <div class="swiper bannerSwiper" >
                <div class="swiper-wrapper">

                    @if($sliders->count() > 0)
                        @foreach($sliders as $slider)
                            <a href="{{ $slider->product_link }}" class="swiper-slide">
                                <img src="{{ asset('/storage/slider/'.$slider->image) }}" alt="{{ $slider->image }}">
                            </a>
                        @endforeach
                    @else
                        <div class="swiper-slide">
                            <img src="https://placehold.co/1921x581" alt="">
                        </div>
                    @endif

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- Swiper JS -->
    </div>


    <!-- Feature Products -->
    @if(count($feature_products) > 0)
        <div class="feature-products">
            @include('frontend.partials.home.feature-products')
        </div>
    @endif
    <!-- End Feature Products -->

    <!-- Hot Deal -->
    @if(count($hot_deals) > 0)
        <div class="hod-deal-products">
            @include('frontend.partials.home.hot-deal')
        </div>
    @endif
    <!-- End Hot Deal -->
    <!-- Hot Deal -->
    @if(count($best_selling) > 0)
        <div class="best-selling-products">
            @include('frontend.partials.home.best-selling')
        </div>
    @endif
    <!-- End Hot Deal -->

    @include('frontend.partials.home.slider-category-products')
@endsection



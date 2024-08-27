@extends('frontend.layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="grid grid-cols-12">
        <div class="hidden md:inline-block md:col-span-3 bg-white shadow-sm relative">
            <x-frontend.home.desktop-menu />
        </div>

        <div class="col-span-12 md:col-span-9">
            <!-- Swiper -->
            <div class="swiper bannerSwiper">
                <div class="swiper-wrapper">

                    @if($sliders->count() > 0)
                        @foreach($sliders as $slider)
                            <div class="swiper-slide">
                                <img src="{{ asset('/storage/slider/'.$slider->image) }}" alt="{{ $slider->image }}">
                            </div>
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
    </div>
    <!-- Feature Products -->
    <div class="feature-products">
        @include('frontend.partials.home.feature-products')
    </div>
    <!-- End Feature Products -->

    <!-- Hot Deal -->
    <div class="feature-products">
        @include('frontend.partials.home.hot-deal')
    </div>
    <!-- End Hot Deal -->

    @include('frontend.partials.home.slider-category-products')
@endsection



@section('css')
    <style>

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endsection
<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="{{ asset('frontend/img/header-slider/1.jpg') }}" alt="">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('frontend/img/header-slider/2.jpg') }}" alt="">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('frontend/img/header-slider/3.jpg') }}" alt="">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('frontend/img/header-slider/4.jpg') }}" alt="">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('frontend/img/header-slider/5.jpg') }}" alt="">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('frontend/img/header-slider/6.jpg') }}" alt="">
        </div>
        <div class="swiper-slide">
            <img src="{{ asset('frontend/img/header-slider/7.jpg') }}" alt="">
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<!-- Swiper JS -->

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

@section('js')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        let swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    </script>
@endsection

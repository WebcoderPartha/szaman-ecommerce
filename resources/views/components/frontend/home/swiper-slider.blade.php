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

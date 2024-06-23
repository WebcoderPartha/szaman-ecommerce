@extends('frontend.layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="grid grid-cols-12">
        <div class="hidden md:inline-block md:col-span-3 bg-white shadow-sm relative">
            <x-frontend.home.desktop-menu />
        </div>
        <div class="col-span-12 md:col-span-9">
            <x-frontend.home.swiper-slider />
        </div>
    </div>
    <div class="product-categories mt-4">
        <x-frontend.home.product-categories />
    </div>
    <div class="feature-products mt-4">
        <x-frontend.home.feature-products />
    </div>
@endsection

@section('js')

@endsection

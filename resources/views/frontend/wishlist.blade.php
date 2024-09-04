@extends('frontend.layout.app')
@section('title', 'Wishlist')
@section('content')
    <div class="flex flex-col gap-16 items-center justify-center py-16">
        <h2 class="text-2xl">YOUR Wish List IS EMPTY</h2>
        <div class="flex flex-col items-center justify-center gap-6 py-8">
            <div class="text-6xl">
                <i class="fa fa-shopping-basket"></i>
            </div>
            <a href="{{ route('frontend.home_page') }}" class="bg-theme text-white px-6 py-2 font-semibold rounded">Continue shopping</a>
        </div>
    </div>

@endsection


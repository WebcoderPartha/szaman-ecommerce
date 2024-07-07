@extends('frontend.layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="grid grid-cols-12">
        <div>
            {{ $product }}
        </div>
    </div>
@endsection

@section('js')

@endsection

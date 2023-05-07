@extends('layouts.app')

@section('title')
Comics Homepage
@endsection

@section('main')
<div class="py-3 d-flex justify-content-center" id="cards_section">
    <div class="container row">
        @foreach ($magazines as $item)
            <div class="col-12 col-sm-3 col-md-2 container-sm g-4">
                <div>
                    <img class="img-fluid" src="{{$item['thumb']}}" alt="{{ $item['title'] }}">
                </div>
                <div class="text-light text-uppercase mt-2">
                    <a href="{{route('product', ['index' => $loop->index])}}" class="text-decoration-none text-light">{{ $item['title'] }}</a>
                </div>
            </div>
        @endforeach

        <div class="d-flex justify-content-center">
            <button class="bg-primary border-0 px-5 py-1 text-uppercase text-light">Load more</button>
        </div>
    </div>
</div>
<section class="d-flex bg-primary text-light py-5 justify-content-center">
    @each('partials.buy-section', $commerce_icons , 'item')
</section>
@endsection

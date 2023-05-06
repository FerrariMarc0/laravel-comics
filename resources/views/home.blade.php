@extends('layouts.app')

@section('title')
Comics Homepage
@endsection

@section('main')
<div class="py-3 d-flex justify-content-center" id="cards_section">
    <div class="container row">
        @each('partials.cards', $magazines , 'item')
        <div class="d-flex justify-content-center">
            <button class="bg-primary border-0 px-5 py-1 text-uppercase text-light">Load more</button>
        </div>
    </div>
</div>
<section class="d-flex bg-primary text-light py-5 justify-content-center">
    @each('partials.buy-section', $commerce_icons , 'item')
</section>
@endsection

@extends('layouts.app')

@section('title')
Comics Product
@endsection

@section('main')
    <section class="bg-primary" id="product_top">
        <div class="bg-success" id="product_top_card"><img src="{{$magazines['thumb']}}" class="img-fluid" alt="sel-img"></div>
    </section>
    <section class="d-flex justify-content-center gap-5" id="product_info">
        <div id="box_info">
            <div><h1>{{$magazines['title']}}</h1></div>
            <div class="bg-success d-flex align-items-center justify-content-between">
                <div class="d-flex justify-content-between w-75 border-end py-2 px-3">
                    <span>U.S. Price {{$magazines['price']}}</span>
                    <span>Available</span>
                </div>
                <div><span class="pe-2">Check availability</span></div>
            </div>
            <div class="pt-3"><p>{{$magazines['description']}}</p></div>
        </div>
        <div id="box_img">
            <h5 class="text-end text-uppercase">Advertisement</h5>
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
        </div>
    </section>

@endsection

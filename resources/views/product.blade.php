@extends('layouts.app')

@section('title')
Comics Product
@endsection

@section('main')
    <section class="bg-primary" id="product_top">
        <div class="bg-success" id="product_top_card"><img src="{{$magazines['thumb']}}" class="img-fluid" alt="sel-img"></div>
    </section>
    <section class="d-flex justify-content-center" id="product_info">
        <div id="box_info">
            <div><h1>{{$magazines['title']}}</h1></div>
            <div>
                <div>
                    <span></span>
                    <span></span>
                </div>
                <div><span></span></div>
            </div>
            <div><p>{{$magazines['description']}}</p></div>
        </div>
        <div id="box_img">
            <h5 class="text-end text-uppercase">Advertisement</h5>
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
        </div>
    </section>

@endsection

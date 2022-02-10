@extends('layouts.app')


@section('main_classes')
single-element 
@endsection

@section('main_content')
    <section class="comics-details">
        <div class="single-image">
            <img src="{{ $product_info['thumb'] }}" alt="">
            
        </div>
        <div class="info-box">
            <div class="sinistra">
                <h2 class="title">{{ $product_info['title'] }}</h2>
                <div class="price-box">
                   <div class="price">
                    <h3 class="color-green">U.S. Price: <span class="color-white">{{ $product_info['price'] }}</span> </h3>
                    <h3 class="color-green">AVAILABLE</h3>
                   </div>
                   <div class="availibiliy">
                    <h3 class="color-white">Check Availability</h3>
                   </div>
                </div>
                <p>{{ $product_info['description'] }}</p>
            </div>
            <div class="destra">
                <h3>advertisment</h3>
                <img class="" src="{{ asset('images/adv.jpg') }}" alt="publicita visa">
            </div>
        </div>
        <div class="le altre info">
            <div class="talent">
                art by
                written by
            </div>
            <div class="spec">
                series
                us price
                on sale date
            </div>
        </div>
    </section>
@endsection
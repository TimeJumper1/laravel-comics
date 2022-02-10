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
        <div class="more-info">
            <div class="talent">
                <h2>Talent</h2>
                <div class="art">
                    <h4>Art by</h4>
                    <div>
                        @foreach ($product_info['artists'] as $artists)
                            <span>{{ $artists }},</span>
                        @endforeach
                    </div>
                </div>
                <div class="art">
                    <h4>written by</h4>
                    <div>
                        @foreach ($product_info['writers'] as $writers)
                            <span>{{ $writers }},</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="talent">
                <h2>Specs</h2>
                <div class="art">
                    <h4>series</h4>
                    <div>
                        {{ $product_info['series'] }} 
                    </div>
                </div>
                <div class="art">
                    <h4>U.S. Price</h4>
                    <div>
                        {{ $product_info['price'] }} 
                    </div>
                </div>
                <div class="art">
                    <h4>On Sale Date</h4>
                    <div>
                        {{ $product_info['sale_date'] }} 
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
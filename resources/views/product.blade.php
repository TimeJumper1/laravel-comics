@extends('layouts.app')


@section('main_classes')
single-element 
@endsection

@section('main_content')
    <section class="comics-details">
        <div class="single-image">
            <img src="{{ $product_info['thumb'] }}" alt="">
            
        </div>
        <div class="da fare con un flex">
            <div class="sinistra">
                <h2>titolo</h2>
                <div>
                    box con dentro prezzo e disponibilita
                </div>
                <p>tutte info</p>
            </div>
            <div class="destra">
                <h3>advertisment</h3>
                <img src="" alt="">
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
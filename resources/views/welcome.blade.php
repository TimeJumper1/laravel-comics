@extends('layouts.app')

@section('page_title')
home
@endsection
@section('main_content')
    <section class="wrapper">
        @include('components.comics-list', [
            
            'comics_array' => $comics_array,
            ])
    </section>
@endsection

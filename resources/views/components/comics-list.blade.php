<div class="comic-container">
    @foreach ($comics_array as $comic)
    <div class="product">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        <h3>{{ $comic['series'] }}</h3>
    </div>
    @endforeach
    
</div>
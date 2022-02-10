<div class="comic-container">
    @foreach ($comics_array as $comic)
    <div class="product">
        <a href="{{ route('comic-info', ['id' => $comic['id']]) }}">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <h3>{{ $comic['series'] }}</h3>
        </a>
    </div>
    @endforeach
    
</div>
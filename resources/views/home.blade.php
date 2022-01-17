@extends('layouts.main')

@section('content')
    @extends('nav')
    <div class="container">
        <h5 class="text-white mt-4">Trending Gifs</h5>
        <div class="row">
            @foreach ($trendingGifs as $gif)
              <x-gif-card :gif="$gif" />
            @endforeach
        </div>

        <h5 class="text-white mt-4">Trending Stickers</h5>
        <div class="row">
            @foreach ($trendingStickersGifs as $gif)
                <x-gif-card :gif="$gif" />
            @endforeach
        </div>
    </div>
@endsection

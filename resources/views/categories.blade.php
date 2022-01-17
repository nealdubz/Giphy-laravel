@extends('layouts.main')

@section('content')
    @extends('nav')
    <div class="container">
        <h5 class="text-white mt-2">Popular Categories</h5>

        @foreach ($categories as $cat)
            <section class="gif-link-wrap">
                <a href="#" class="link-gif">
                    <img src="{{ $cat['gif']['images']['preview_gif']['url'] }}" alt="">
                    <span class="title">{{ $cat['name'] }}</span>
                </a>
            </section>
        @endforeach
    </div>
@endsection

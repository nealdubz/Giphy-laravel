@extends('layouts.main')

@section('content')
    @extends('nav')
    <div class="container">
        <h5 class="text-white mt-4">{{ $Gif['title'] }}</h5>
        <div class="row">
            <div class="col-md-6">
                <img class="w-100 " src="{{ $Gif['images']['original']['url'] }}" alt="Giphy image">
            </div>
            <div class="col-md-6">
                <div class="row">
                    @if ($Gif['user'])
                        <div class="col-md-2">
                            <img class=" user-avatar " src="{{ $Gif['user']['avatar_url'] }}" alt="Giphy image">
                        </div>
                        <div class="col-md-10">
                            <div class="text-white"> By {{ $Gif['user']['display_name'] }}<br>
                                @ {{ $Gif['user']['username'] }}</div>
                        </div>
                        <div class="col-12">
                            <div class="text-white"> Website <a class=" "
                                    href="{{ $Gif['user']['website_url'] }}" target="_blank">
                                    <span>{{ $Gif['user']['website_url'] }}</span></a> </div>
                        </div>
                    @endif
                </div>


            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-sm btn-secondary mt-3" href="{{ route('home') }}">Back</a>
        </div>
    </div>
@endsection

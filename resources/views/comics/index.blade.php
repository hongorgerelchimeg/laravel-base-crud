@extends('template.base')

@section('title', 'Comics listing | DC Comics')

@section('content')
    <div class="jumbotron">
        <img src=" {{ asset('images/jumbotron.jpg') }}" alt="">
    </div>
    <div class="current-series">
        @foreach ($comics as $comic)

                <div class="card">
                    <a href="{{ route('comics.show', $comic->id) }}">
                        {{-- <?php dd($comic) ?> --}}
                        <div class="img-holder">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        </div>

                        <h3>{{ $comic['series'] }}</h3>
                    </a>
                </div>
            </a>
        @endforeach
    </div>

    <div class="load-more-btn">
        <button>Load More</button>
    </div>

    <div class="container-sec2">
        <div class="section2">
            <div class="text-image-card">
                <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
                <span>digfital comics</span>
            </div>
            <div class="text-image-card">
                <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
                <span>digfital comics</span>
            </div>
            <div class="text-image-card">
                <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
                <span>digfital comics</span>
            </div>
            <div class="text-image-card">
                <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
                <span>digfital comics</span>
            </div>
            <div class="text-image-card">
                <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
                <span>digital comics</span>
            </div>
        </div>
    </div>
@endsection




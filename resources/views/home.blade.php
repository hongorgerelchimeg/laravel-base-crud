@extends('template.base')

@section('title', 'Home | DC Comics')
@section('content')
    <main id="home-page">
        <div class="container">
            <h1>View Comic Listings</h1>
            <a href="{{ route('comics.index') }}">View Listings</a>
        </div>

    </main>

@endsection

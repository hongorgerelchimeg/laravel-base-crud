@extends('templates.base')

@section('pageTitle', $pageTitle)

@section('pageMain')
    <div class="container">
        <div class="row g-4">
            <div class="col-8">
                <h2>{{ $house->title }}</h2>
                <p>{{ $house->description }}</p>
            </div>
        </div>
    </div>
@endsection

@extends('template.base')

@section('title', $pageTitle)

@section('content')
    <main id="page-show">
        <div class="container">
            <div class="row g-4">
                <div class="col-8">
                    <h2>{{ $comic->title }}</h2>
                    <p>{{ $comic->description }}</p>
                </div>
            </div>
        </div>
    </main>
@endsection

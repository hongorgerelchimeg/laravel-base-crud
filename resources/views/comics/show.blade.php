@extends('template.base')

@section('title', $pageTitle)

@section('content')
    <main id="page-show">
        <div class="container">
            <div class="row g-4">
                <div class="col-8">
                    <h2>{{ $comic->title }}</h2>
                    <p>{{ $comic->description }}</p>
                    <a href="{{ route('comics.edit', $comic) }}" class="btn btn-outline-primary mb-2"> <i class="fas fa-edit"></i> Edit </a>
                    <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="">
                            DELETE
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

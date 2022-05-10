@extends('template.base')

@section('title', 'Comics listing | DC Comics')

@section('content')

    <ul>
        @foreach ($comics as $comic)
        <li>
            <a href="{{ route('comics.show', $comic->id) }}">{{ $comic['title'] }} </a>
        </li>
        @endforeach
    </ul>

@endsection

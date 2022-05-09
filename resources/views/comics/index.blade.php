@extends('template.base')

@section('pageTitle', 'Comics listing | DC Comics')

@section('content')

    <ul>
        @foreach ($comics as $comic)
        <li>
            <a href="{{$comic['id']}}"> {{ $comic['title'] }} </a>
        </li>
        @endforeach
    </ul>

@endsection

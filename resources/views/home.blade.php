@extends('template.base')

@section('title', 'Home | DC Comics')
@section('content')

    <a href="{{ route('comics.index') }}">View Listings</a>

@endsection

@extends('template.base')

@section('title', 'Edit Comic listing')

@section('content')
    <main id="page-edit">
        <div class="container">
            <form method="POST" action="{{ route('comics.update', $comic) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                    @error('title')
                    <div class="mt-2 alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                    @error('series')
                    <div class="mt-2 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                    @error('thumb')
                    <div class="mt-2 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                    @error('price')
                    <div class="mt-2 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                    @error('sale_date')
                    <div class="mt-2 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
                    @error('type')
                    <div class="mt-2 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description"> {{ $comic->description }} </textarea>
                    @error('description')
                    <div class="mt-2 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </main>
@endsection

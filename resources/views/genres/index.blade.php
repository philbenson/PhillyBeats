@extends('app')
@section('title', 'Genres')
@section('content')
    @foreach($genres as $genre)
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p><strong><a href="{{ route('genres.show', $genre) }}">{{ $genre->name }}</a></strong> <a href="{{ route('genres.edit', $genre) }}" class="btn btn-default btn-xs">Edit</a><br>
                    ID: {{ $genre->id }}<br>
                    City: {{ $genre->city }}<br>
                    Website: {{ $genre->website }}</p>
                </div>
            </div>
        </div>
    @endforeach
@stop
@extends('app')
@section('title', 'Artists')
@section('content')
    @foreach($artists as $artist)
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p><strong><a href="{{ route('artists.show', $artist) }}">{{ $artist->name }}</a></strong> <a href="{{ route('artists.edit', $artist) }}" class="btn btn-default btn-xs">Edit</a><br>
                    ID: {{ $artist->id }}<br>
                    City: {{ $artist->city }}<br>
                    Website: {{ $artist->website }}</p>
                </div>
            </div>
        </div>
    @endforeach
@stop
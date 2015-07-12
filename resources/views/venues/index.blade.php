@extends('app')
@section('title', 'Venues')
@section('content')
    @foreach($venues as $venue)
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p><strong><a href="{{ route('venues.show', $venue) }}">{{ $venue->name }}</a></strong> <a href="{{ route('venues.edit', $venue) }}" class="btn btn-default btn-xs">Edit</a><br>
                    ID: {{ $venue->id }}<br>
                    City: {{ $venue->city }}<br>
                    Website: {{ $venue->website }}</p>
                </div>
            </div>
        </div>
    @endforeach
@stop
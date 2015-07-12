@extends('app')
@section('title', 'Events')
@section('content')
    @foreach($events as $event)
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p><strong><a href="{{ route('events.show', $event) }}">{{ $event->name }}</a></strong> <a href="{{ route('events.edit', $event) }}" class="btn btn-default btn-xs">Edit</a><br>
                    ID: {{ $event->id }}<br>
                    City: {{ $event->city }}<br>
                    Website: {{ $event->website }}</p>
                </div>
            </div>
        </div>
    @endforeach
@stop
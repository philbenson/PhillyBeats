@extends('app')
@section('title', 'Event')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>ID: {{ $event->id }}<br>
                Name: {{ $event->name }}<br>
                City: {{ $event->city }}<br>
                Website: {{ $event->website }}</p>
            </div>
        </div>
    </div>
@stop
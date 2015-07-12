@extends('app')
@section('title', 'Venue')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>ID: {{ $venue->id }}<br>
                Name: {{ $venue->name }}<br>
                City: {{ $venue->city }}<br>
                Website: {{ $venue->website }}</p>
            </div>
        </div>
    </div>
@stop
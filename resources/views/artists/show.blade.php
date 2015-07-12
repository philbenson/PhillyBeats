@extends('app')
@section('title', 'Artist')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>ID: {{ $artist->id }}<br>
                Name: {{ $artist->name }}<br>
                City: {{ $artist->city }}<br>
                Website: {{ $artist->website }}</p>
            </div>
        </div>
    </div>
@stop
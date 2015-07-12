@extends('app')
@section('title', 'Genre')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>ID: {{ $genre->id }}<br>
                Name: {{ $genre->name }}<br>
                City: {{ $genre->city }}<br>
                Website: {{ $genre->website }}</p>
            </div>
        </div>
    </div>
@stop
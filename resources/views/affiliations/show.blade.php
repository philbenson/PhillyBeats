@extends('app')
@section('title', 'Affiliation')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>ID: {{ $affiliation->id }}<br>
                Name: {{ $affiliation->name }}<br>
                City: {{ $affiliation->city }}<br>
                Website: {{ $affiliation->website }}</p>
            </div>
        </div>
    </div>
@stop
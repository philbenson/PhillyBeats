@extends('app')
@section('title', 'Promoter')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>ID: {{ $promoter->id }}<br>
                Name: {{ $promoter->name }}<br>
                City: {{ $promoter->city }}<br>
                Website: {{ $promoter->website }}</p>
            </div>
        </div>
    </div>
@stop
@extends('app')
@section('title', 'Affiliations')
@section('content')
    @foreach($affiliations as $affiliation)
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
    @endforeach
@stop
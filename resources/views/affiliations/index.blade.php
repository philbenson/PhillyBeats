@extends('app')
@section('title', 'Affiliations')
@section('content')
    @foreach($affiliations as $affiliation)
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p><strong><a href="{{ route('affiliations.destroy', $affiliation) }}">{{ $affiliation->name }}</a></strong> <a href="{{ route('affiliations.edit', $affiliation) }}" class="btn btn-default btn-xs">Edit</a><br>
                    ID: {{ $affiliation->id }}<br>
                    City: {{ $affiliation->city }}<br>
                    Website: {{ $affiliation->website }}</p>
                </div>
            </div>
        </div>
    @endforeach
@stop
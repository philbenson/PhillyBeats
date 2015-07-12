@extends('app')
@section('title', 'Promoters')
@section('content')
    @foreach($promoters as $promoter)
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p><strong><a href="{{ route('promoters.show', $promoter) }}">{{ $promoter->name }}</a></strong> <a href="{{ route('promoters.edit', $promoter) }}" class="btn btn-default btn-xs">Edit</a><br>
                    ID: {{ $promoter->id }}<br>
                    City: {{ $promoter->city }}<br>
                    Website: {{ $promoter->website }}</p>
                </div>
            </div>
        </div>
    @endforeach
@stop
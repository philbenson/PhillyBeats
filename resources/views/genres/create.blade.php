@extends('app')
@section('title', 'Create Genre')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                {!! Form::open(['action' => 'GenreController@store']) !!}
                    @include('genres.form', ['submitButtonText' => 'Submit'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
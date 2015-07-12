@extends('app')
@section('title', 'Create Artist')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                {!! Form::open(['action' => 'ArtistController@store']) !!}
                    @include('artists.form', ['submitButtonText' => 'Submit'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
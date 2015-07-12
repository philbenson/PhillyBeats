@extends('app')
@section('title', 'Create Event')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                {!! Form::open(['action' => 'EventController@store']) !!}
                    @include('events.form', ['submitButtonText' => 'Submit'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
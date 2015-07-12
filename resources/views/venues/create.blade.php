@extends('app')
@section('title', 'Create Venue')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                {!! Form::open(['action' => 'VenueController@store']) !!}
                    @include('venues.form', ['submitButtonText' => 'Submit'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
@extends('app')
@section('title', 'Create Affiliation')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                {!! Form::open(['action' => 'AffiliationController@store']) !!}
                    @include('affiliations.form', ['submitButtonText' => 'Submit'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
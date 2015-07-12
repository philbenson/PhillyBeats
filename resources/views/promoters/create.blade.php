@extends('app')
@section('title', 'Create Promoter')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                {!! Form::open(['action' => 'PromoterController@store']) !!}
                    @include('promoters.form', ['submitButtonText' => 'Submit'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
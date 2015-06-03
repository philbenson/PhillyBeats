@extends('app')
@section('title', 'Update Affiliation')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                {!! Form::model($affiliation, ['method' => 'PATCH', 'route' => ['affiliations.update', $affiliation]]) !!}
                    @include('affiliations.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
                {!! Form::open(['route' => ['affiliations.destroy', $affiliation], 'method' => 'delete']) !!}
                    {!! Form::submit('Delete', ['class' => 'form-control btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
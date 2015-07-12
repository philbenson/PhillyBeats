@extends('app')
@section('title', 'Update Venue')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                {!! Form::model($venue, ['method' => 'PATCH', 'route' => ['venues.update', $venue]]) !!}
                    @include('venues.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
                {!! Form::open(['route' => ['venues.destroy', $venue], 'method' => 'delete']) !!}
                    {!! Form::submit('Delete', ['class' => 'form-control btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
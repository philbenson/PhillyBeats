@extends('app')
@section('title', 'Update Event')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                {!! Form::model($event, ['method' => 'PATCH', 'route' => ['events.update', $event]]) !!}
                    @include('events.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
                {!! Form::open(['route' => ['events.destroy', $event], 'method' => 'delete']) !!}
                    {!! Form::submit('Delete', ['class' => 'form-control btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
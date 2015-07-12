@extends('app')
@section('title', 'Update Genre')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                {!! Form::model($genre, ['method' => 'PATCH', 'route' => ['genres.update', $genre]]) !!}
                    @include('genres.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
                {!! Form::open(['route' => ['genres.destroy', $genre], 'method' => 'delete']) !!}
                    {!! Form::submit('Delete', ['class' => 'form-control btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
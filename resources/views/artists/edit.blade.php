@extends('app')
@section('title', 'Update Artist')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                {!! Form::model($artist, ['method' => 'PATCH', 'route' => ['artists.update', $artist]]) !!}
                    @include('artists.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
                {!! Form::open(['route' => ['artists.destroy', $artist], 'method' => 'delete']) !!}
                    {!! Form::submit('Delete', ['class' => 'form-control btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
@extends('app')
@section('title', 'Update Promoter')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                {!! Form::model($promoter, ['method' => 'PATCH', 'route' => ['promoters.update', $promoter]]) !!}
                    @include('promoters.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
                {!! Form::open(['route' => ['promoters.destroy', $promoter], 'method' => 'delete']) !!}
                    {!! Form::submit('Delete', ['class' => 'form-control btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
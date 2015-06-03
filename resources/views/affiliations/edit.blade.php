@extends('app')
@section('title', 'Update Affiliation')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                {!! Form::model($affiliation, ['method' => 'PATCH', 'action' => ['AffiliationController@update', $affiliation->id]]) !!}
    
                    <div class="form-group">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('city', 'City') !!}
                        {!! Form::text('city', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('website', 'Website') !!}
                        {!! Form::text('website', null, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Submit', ['class' => 'form-control btn btn-primary']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
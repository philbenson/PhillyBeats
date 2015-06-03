@extends('app')
@section('title', 'Create Affiliation')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                @include('affiliations.form')
            </div>
        </div>
    </div>
@stop
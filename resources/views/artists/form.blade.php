
    
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
    
    <div class="form-group">
        {!! Form::label('soundcloud', 'Soundcloud') !!}
        {!! Form::text('soundcloud', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('mixcloud', 'Mixcloud') !!}
        {!! Form::text('mixcloud', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('bandcamp', 'Bandcamp') !!}
        {!! Form::text('bandcamp', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('facebook', 'Facebook') !!}
        {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('twitter', 'Twitter') !!}
        {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit($submitButtonText, ['class' => 'form-control btn btn-primary']) !!}


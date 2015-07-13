
    
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('address', 'Address') !!}
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('website', 'Website') !!}
        {!! Form::text('website', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('facebook', 'Facebook') !!}
        {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('twitter', 'Twitter') !!}
        {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('instagram', 'Instagram') !!}
        {!! Form::text('instagram', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit($submitButtonText, ['class' => 'form-control btn btn-primary']) !!}


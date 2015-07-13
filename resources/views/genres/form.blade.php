
    
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit($submitButtonText, ['class' => 'form-control btn btn-primary']) !!}


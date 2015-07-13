
    
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('venue_id', 'Venue') !!}
        {!! Form::input('number', 'venue_id', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('address', 'Address') !!}
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('date', 'Date') !!}
        {!! Form::text('date', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('door_time', 'Door Time') !!}
        {!! Form::text('door_time', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('show_time', 'Show Time') !!}
        {!! Form::text('show_time', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('end_time', 'End Time') !!}
        {!! Form::text('end_time', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('price', 'Price') !!}
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('website', 'Website') !!}
        {!! Form::text('website', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('facebook', 'Facebook') !!}
        {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit($submitButtonText, ['class' => 'form-control btn btn-primary']) !!}


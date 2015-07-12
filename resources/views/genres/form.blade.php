
    
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('venue', 'Venue') !!}
        {!! Form::text('venue', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('address', 'Address') !!}
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('startDate', 'Start Date') !!}
        {!! Form::text('startDate', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('endDate', 'End Date') !!}
        {!! Form::text('endDate', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('doorTime', 'Door Time') !!}
        {!! Form::text('doorTime', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('showTime', 'Show Time') !!}
        {!! Form::text('showTime', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('endTime', 'End Time') !!}
        {!! Form::text('endTime', null, ['class' => 'form-control']) !!}
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


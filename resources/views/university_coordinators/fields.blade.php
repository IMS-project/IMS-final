<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- University Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('university_id', 'University Id:') !!}
    {!! Form::number('university_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('universityCoordinators.index') }}" class="btn btn-default">Cancel</a>
</div>

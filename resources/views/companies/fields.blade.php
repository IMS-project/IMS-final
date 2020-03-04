<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Offer Capacity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('offer_capacity', 'Offer Capacity:') !!}
    {!! Form::number('offer_capacity', null, ['class' => 'form-control']) !!}
</div>

<!-- Field Of Study Field -->
<div class="form-group col-sm-6">
    {!! Form::label('field_of_study', 'Field Of Study:') !!}
    {!! Form::text('field_of_study', null, ['class' => 'form-control']) !!}
</div>

<!-- Min Grade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('min_grade', 'Min Grade:') !!}
    {!! Form::number('min_grade', null, ['class' => 'form-control']) !!}
</div>

<!-- Student Benefit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_benefit', 'Student Benefit:') !!}
    {!! Form::text('student_benefit', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('companies.index') }}" class="btn btn-default">Cancel</a>
</div>

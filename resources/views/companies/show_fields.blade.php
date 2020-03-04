<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $companies->name }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $companies->address }}</p>
</div>

<!-- Offer Capacity Field -->
<div class="form-group">
    {!! Form::label('offer_capacity', 'Offer Capacity:') !!}
    <p>{{ $companies->offer_capacity }}</p>
</div>

<!-- Field Of Study Field -->
<div class="form-group">
    {!! Form::label('field_of_study', 'Field Of Study:') !!}
    <p>{{ $companies->field_of_study }}</p>
</div>

<!-- Min Grade Field -->
<div class="form-group">
    {!! Form::label('min_grade', 'Min Grade:') !!}
    <p>{{ $companies->min_grade }}</p>
</div>

<!-- Student Benefit Field -->
<div class="form-group">
    {!! Form::label('student_benefit', 'Student Benefit:') !!}
    <p>{{ $companies->student_benefit }}</p>
</div>


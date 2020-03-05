<!-- Student Id Field -->
<div class="form-group">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $attendances->student_id }}</p>
</div>

<!-- Advisor Id Field -->
<div class="form-group">
    {!! Form::label('advisor_id', 'Advisor Id:') !!}
    <p>{{ $attendances->advisor_id }}</p>
</div>

<!-- Supervisor Id Field -->
<div class="form-group">
    {!! Form::label('supervisor_id', 'Supervisor Id:') !!}
    <p>{{ $attendances->supervisor_id }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $attendances->date }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $attendances->status }}</p>
</div>


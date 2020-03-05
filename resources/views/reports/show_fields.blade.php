<!-- Student Id Field -->
<div class="form-group">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $reports->student_id }}</p>
</div>

<!-- Advisor Id Field -->
<div class="form-group">
    {!! Form::label('advisor_id', 'Advisor Id:') !!}
    <p>{{ $reports->advisor_id }}</p>
</div>

<!-- Supervisor Id Field -->
<div class="form-group">
    {!! Form::label('supervisor_id', 'Supervisor Id:') !!}
    <p>{{ $reports->supervisor_id }}</p>
</div>

<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Text:') !!}
    <p>{{ $reports->text }}</p>
</div>

<!-- Evaluation Field -->
<div class="form-group">
    {!! Form::label('evaluation', 'Evaluation:') !!}
    <p>{{ $reports->evaluation }}</p>
</div>

<!-- Attachment Field -->
<div class="form-group">
    {!! Form::label('attachment', 'Attachment:') !!}
    <p>{{ $reports->attachment }}</p>
</div>


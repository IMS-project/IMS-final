<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $university->name }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $university->address }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $university->user_id }}</p>
</div>

<!-- Profile Field -->
<div class="form-group">
    {!! Form::label('profile', 'Profile:') !!}
    <p>{{ $university->profile }}</p>
</div>


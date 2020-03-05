<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $roles->name }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $roles->slug }}</p>
</div>

<!-- Permission Field -->
<div class="form-group">
    {!! Form::label('permission', 'Permission:') !!}
    <p>{{ $roles->permission }}</p>
</div>


<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $users->name }}</p>
</div>
<div class="form-group">
    <select name="role" id="name" type ="text" class="form-control" value="{{ old('role') }}">
        @foreach ($roles as $role)
        <option value="{{ $role->id }}">{{$role->name}}</option>
            
        @endforeach
    </select>
</div>

<!-- Remember Token Field 
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $users->remember_token }}</p>
</div>
-->

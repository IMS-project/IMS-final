@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <form method="post" action="{{ route('CompCoordinator.store')}}">
            {{csrf_field()}}
            <div class="form-control">
                <input type="text" value="username" name="name" class="form-contorl">
            </div>
            <div class="form-control">
                <input type="email" value="email" name="email" class="form-contorl">
            </div>
            <div class="form-control">
                <input type="password" value="password" name="password" class="form-contorl">
            </div>
            <div class="form-control">
                <input type="text" value="phone" name="phone" class="form-contorl">
            </div>
            <div class="form-control">
                <input type="text" value="geneder" name="sex" class="form-contorl">
            </div>
        
            <div class="form-control">
                <select name="role" id="name" type ="text" class="form-control" value="{{ old('role') }}">
                @foreach ($role as $role)
                <option value="{{ $role->id }}">{{$role->name}}</option>
                    
                @endforeach
            </select> 

            
            <div class="form-control">
                <select name="company" id="uni" type ="text" class="form-control">
                @foreach ($company as $comp)
                <option value="{{ $comp->id }}">{{$comp->name}}</option>
                    
                @endforeach
            </select>
            </div>
            
            <div class="form-control">
                <button class="btn btn-primary" type="submit"> Register</button>
            </div>
        
        </form>

    </div>
    <div class="col-sm-2"></div>
</div>

@endsection()
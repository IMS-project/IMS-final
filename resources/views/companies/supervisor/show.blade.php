
@extends('layouts.app')

@section('content')
    <section class="content-header"> <h1>Supervisors</h1></section>

  <div class="content">
     <div class="box box-primary">
         <div class="box-body">
            <div class="row" style="padding-left: 20px">

            <div class="form-group">
                    {!! Form::label('first_name', 'First_Name:') !!}
                    <p>{{ $user->first_name }}</p>
                </div>
                <div class="form-group">
                    {!! Form::label('last_name', 'Last_Name:') !!}
                    <p>{{ $user->last_name }}</p>
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email:') !!}
                    <p>{{ $users->email }}</p>
                </div>

                <div class="form-group">
                    {!! Form::label('phone', 'Phone:') !!}
                    <p>{{ $users->phone }}</p>
                </div>
                <div class="form-group">
                    {!! Form::label('sex', 'sex:') !!}
                    <p>{{ $users->sex }}</p>
                </div>
                <div class="form-group">
                    {!! Form::label('company', ' company:') !!}
                    <p>{{ $company->name }}</p>
                </div>
                
                    <a href="{{ route('Supervisor.index') }}" class="btn btn-default">Back</a>
                </div>
                
            </div>
        </div>
    </div>


@endsection
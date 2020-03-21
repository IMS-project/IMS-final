
@extends('layouts.app')

@section('content')
    <section class="content-header"> <h1> Coordinator</h1></section>

  <div class="content">
     <div class="box box-primary">
         <div class="box-body">
            <div class="row" style="padding-left: 20px">

                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    <p>{{ $user->name }}</p>
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email:') !!}
                    <p>{{ $user->email }}</p>
                </div>

                <div class="form-group">
                    {!! Form::label('phone', 'Phone:') !!}
                    <p>{{ $user->phone }}</p>
                </div>
                <div class="form-group">
                    {!! Form::label('sex', 'sex:') !!}
                    <p>{{ $user->sex }}</p>
                </div>
                <div class="form-group">
                    {!! Form::label('university', 'university:') !!}
                    <p>{{ $university->name }}</p>
                </div>
                
                    <a href="{{ route('UniCoordinator.index') }}" class="btn btn-default">Back</a>
                </div>
                
            </div>
        </div>
    </div>


@endsection
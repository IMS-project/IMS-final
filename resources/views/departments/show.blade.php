
@extends('layouts.app')

@section('content')
    <section class="content-header"> <h1>DEpartments</h1></section>

  <div class="content">
     <div class="box box-primary">
         <div class="box-body">
            <div class="row" style="padding-left: 20px">

                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    <p>{{ $department->department_name }}</p>
                </div>

                <div class="form-group">
                    {!! Form::label('university', ' university:') !!}
                    <p>{{ $university->name }}</p>
                </div>
                
                    <a href="{{ route('departments.index') }}" class="btn btn-default">Back</a>
                </div>
                
            </div>
        </div>
    </div>


@endsection
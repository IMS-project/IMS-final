
@extends('companyAdmin.app')

@section('content')
    <section class="content-header"> <h1> student details</h1></section>

  <div class="content">
     <div class="box box-primary">
         <div class="box-body">
            <div class="row" style="padding-left: 20px">

            <div class="form-group">
                    {!! Form::label('first_name', 'First_Name:') !!}
                    <p>{{ $users->first_name }}</p>
                </div>
                <div class="form-group">
                    {!! Form::label('last_name', 'Last_Name:') !!}
                    <p>{{ $users->last_name }}</p>
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
                    {!! Form::label('grade', 'Grade:') !!}
                    <p>{{ $students->grade }}</p>
                </div>

                <div class="form-group">
                    {!! Form::label('student_id', 'Student_ID:') !!}
                    <p>{{ $students->student_id }}</p>
                </div>
                

                <div class="form-group">
                    {!! Form::label('class_year', 'class_Year:') !!}
                    <p>{{ $students->class_year }}</p>
                </div>

                <div class="form-group">
                    {!! Form::label('semester_term', 'Semester_term:') !!}
                    <p>{{ $students->semester_term }}</p>
                </div>

                <div class="form-group">
                    {!! Form::label('university', 'university:') !!}
                    <p>{{ $university->name }}</p>
                </div>
                <div class="form-group">
                    {!! Form::label('department', 'department:') !!}
                    <p>{{ $department->department_name }}</p>
                </div>
                
                
                    <a href="{{ route('applicants.index') }}" class="btn btn-default">Back</a>
                </div>
                
            </div>
        </div>
    </div>


@endsection
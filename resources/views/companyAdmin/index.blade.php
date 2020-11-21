@extends('companyAdmin.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Applicants information</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="companies-table">
                        <thead>
                            <tr> 
                                <th> Full Name</th>
                                <th>ID</th>
                                <th>Year</th>
                                <th>CGPA</th>
                                <th>Department</th>
                                 <th>University</th>
                                 {{-- <th>company</th> --}}
                                <th colspan="3">Action</th>
                                <th><a class="btn btn-primary pull-right" style=
                                    "margin-top: -7px;margin-bottom: 5px" href=""><i class="fa fa-plus-circle">Automatic</i></a></th> 
                                
                            </tr>
                        </thead>
                
                        <tbody>
                            
                        @foreach($applicants as $app)
                        
                         <tr>
                                <td>{{$app->student->user->first_name}} {{$app->student->user->last_name}}</td>
                                <td>{{$app->student->student_id}}</td>
                                <td>{{$app->student->class_year}}</td>
                                <td>{{$app->student->grade}}</td>
                                <td>{{$app->student->department->department_name}}</td>
                                <td>{{$app->student->university->name}}</td>
                                <td>
                                    <div class='btn-group'>
                                        <a href="{{route('approve',[$app->student_id, $app->department_id, $app->duration_id]) }}"" class="btn btn-success">Approve</a>
                                        <a href="{{ route('reject',[$app->id]) }}" class="btn btn-danger">Reject</a> 
                                        
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection


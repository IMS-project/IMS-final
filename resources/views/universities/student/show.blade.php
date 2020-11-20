
@extends('universityAdmin.app')

@section('content')
    <section class="content-header"> <h1>student details </h1></section>

  <div class="content">
     <div class="box box-primary">
         <div class="box-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="companies-table">
                <thead>
                    <tr>
                        <th>Full name</th>
                        <th>ID</th>
                        <th>Email</th> 
                        <th>Phone</th>
                        <th>Sex</th>
                        <th>CGPA</th>
                        <th>Department</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>{{ $users->first_name }} {{ $users->last_name }}</td>
                        <td>{{ $students->student_id }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->phone }}</td>
                        <td>{{ $users->sex }}</td>
                        <td>{{ $students->grade }}</td>
                        <td>{{ $department->department_name }}</td>

                    </tr>
                </tbody>
            </table>
            </div>
            <div class="row" style="padding-left: 20px">         
                </div>
                
            </div>

        </div>
        
        <a href="{{ route('Student.index') }}"  class="btn btn-primary pull-left" style=
        "margin-top: 0px;margin-bottom: 5px">Back</a>
    </div>


@endsection
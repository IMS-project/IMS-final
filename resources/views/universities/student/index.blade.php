@extends('universityAdmin.app')

@section('content')

<section class="content-header">
    
        <a href="{{ url('/import/import-excel') }}" class="btn btn-success"><Import-Excel class="fas fa-file-import">Import-Excel</i></a>
  
    <a class="btn btn-primary pull-right" style=
    "margin-top: -2px;margin-bottom: 5px" href="{{ route('Student.create') }}"><i class="fa fa-plus-circle">Add NEW</i></a>
</section>

<div class="content">

    <div class="clearfix"></div>
    @include('flash::message')
    <div class="clearfix"></div>

    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
        <div class="box-body">

                <section class="container-fluid">
                    <table class="table" id="students-table">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>ID</th>
                                    <th>Department</th>
                                    <th>CGPA</th>
                                    <th colspan="3">Action</th>
                                </tr>
                            </thead>

                        <tbody>
                            @foreach($students as $stu )
                            <tr>
                                <td>{{ $stu->id}}</td>
                                <td>{{ $stu->user->first_name }}</td>
                                <td>{{ $stu->student_id}}</td>
                                <td>{{ $stu->department->department_name}}</td>
                                <td>{{ $stu->grade}}</td>
                                <td>
                                    {!! Form::open(['route' => ['UniCoordinator.destroy', $stu->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>
                                        <a href="{{ route('Student.show',$stu->id) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                        <a href="{{ route('Student.edit', $stu->id) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>  
                 </section> 
                </div> 
             </div> 
        </div> 
@endsection
@extends('companyAdmin.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Students placed</h1>
        {{-- <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style=
            "margin-top: -10px;margin-bottom: 5px" href="{{ route('Internship.create') }}"><i class="fa fa-plus-circle">Add New</i></a>
         </h1> --}}
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <section class="container-fluid">
                    <div class="table-responsive">
                    <table class="table table-bordered" id=" stusents-table">
                            <thead>
                                <tr>
                                    
                                    <th>Full Name</th>
                                    <th>University</th>
                                    <th>Department</th>
                                    <th>Contact</th>
                                    {{-- <th colspan="3">Action</th> --}}
                                </tr>
                            </thead>
         <body>
                @foreach($posts as $sup)
                <tr>
                    {{-- <td>{{$sup->id}}</td> --}}
                    
                    <td>{{$sup->student->user->first_name}} {{$sup->student->user->last_name}}</td>
    
                    <td>{{ $sup->student->university->name}}</td>
                    <td>{{ $sup->student->department->department_name}}</td>
                    {{-- <td>{{ $sup->work_area}}</td> --}}
                    {{-- <td>
                        {!! Form::open(['route' => ['Internship.destroy',  $sup->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('Internship.show', $sup->id) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('Internship.edit', $sup->id) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td> --}}
                </tr>
            @endforeach
            </body>
                    </table>
                    </div>  
                    </section> 
            </div>
        </div>
    </div>
@endsection


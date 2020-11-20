@extends('companyAdmin.app')

@section('content')

<section class="content-header">
    <h4>
 Supervisor list
    
    <a class="btn btn-primary pull-right" style=
    "margin-top: -6px;margin-bottom: 5px" href="{{ route('Supervisor.create') }}"><i class="fa fa-plus-circle">Add NEW</i></a>
</h4>
</section>

<div class="content">

        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>
        @include('adminlte-templates::common.errors')
            <div class="box box-primary">
                <div class="box-body">

            <section class="container-fluid">
                <div class="table-responsive">
                <table class="table table-bordered" id=" Supervisors-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
     <tbody>
            @foreach($supervisors as $sup)
            <tr>
                <td>{{ $sup->id}}</td>
                <td>{{ $sup->user->first_name}} {{ $sup->user->last_name}}</td>
                <td>
                    {!! Form::open(['route' => ['Supervisor.destroy',  $sup->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('Supervisor.show', $sup->id) }}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('Supervisor.edit', $sup->id) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
                </table>  
                </div>
                </section> 
                </div> 
             </div> 
        </div> 
        
@endsection
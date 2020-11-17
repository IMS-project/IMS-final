@extends('companyAdmin.app')

@section('content')

<section class="content-header">
    <h1>
 Supervisors
    
    <a class="btn btn-primary pull-right" style=
    "margin-top: -6px;margin-bottom: 5px" href="{{ route('Supervisor.create') }}"><i class="fa fa-plus-circle">Add NEW</i></a>
</h1>
</section>

<div class="content">

        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>
        @include('adminlte-templates::common.errors')
            <div class="box box-primary">
                <div class="box-body">

            <section class="container-fluid">
                <table class="table" id=" Supervisors-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>First Name</th>
                                <th>From Company</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
     <tbody>
            @foreach($supervisors as $sup)
            <tr>
                <td>{{ $sup->id}}</td>
                <td>{{ $sup->user->first_name}}</td>
                <td>{{ $sup->company->name}}</td>
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
                </section> 
                </div> 
             </div> 
        </div> 
        
@endsection
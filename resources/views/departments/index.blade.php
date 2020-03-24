@extends('layouts.app')

@section('content')
   
<section class="content-header">
        <h1 class="pull-left">Departments</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('departments.create') }}">Add New</a>
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
      <table class="table" id="departments-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name Of Departments</th> 
                    <th>Univesity Name</th>
                    <th>Univesity Address</th>
                </tr>
            </thead>
            <tbody>
            @foreach($depar as $dep )
            <tr> 
                <td>{{ $dep->id}}</td>
                <td>{{ $dep->department_name }}</td>
                <td>{{ $dep->university->name }}</td>
                <td>{{ $dep->university->address }}</td>
                <td>
                    {!! Form::open(['route' => ['departments.destroy', $dep->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                            <a href="{{ route('departments.show', [$dep->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('departments.edit', [$dep->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
@endsection
@extends('universityAdmin.app')

@section('content')
   
<section class="content-header">
        <h4 class="pull-left">Departments</h4>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('departments.create') }}"><i class="fa fa-plus-circle">Add New</i></a>
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
    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="departments-table">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Department name</th> 
                </tr>
            </thead>
            <tbody>
            @foreach($departments as $dep )
            <tr> 
                <td>{{ $dep->id}}</td>
                <td>{{ $dep->department_name }}</td>
                {{-- <td>{{ $dep->university->name }}</td>
               <td>{{ $dep->university->address }}</td>  --}}
                <td>
                    {!! Form::open(['route' => ['departments.destroy', $dep->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                            <a href="{{ route('departments.show', [$dep->id]) }}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
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
</div>
@endsection
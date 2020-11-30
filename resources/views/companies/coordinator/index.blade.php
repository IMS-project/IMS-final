@extends('superAdmin.app')

@section('content')

<section class="content-header">
    <h4> company user </h4>
        <a class="btn btn-primary pull-right" style=
    "margin-top: -12px;margin-bottom:5px" href="{{ route('CompCoordinator.create') }}"><i class="fa fa-plus-circle">Add NEW</i></a>
</section>

<div class="content">

   <div class="clearfix"></div>
    @include('flash::message')
    <div class="clearfix"></div>

    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
       <div class="box-body">

        <section class="container-fluid">
        <table class="table table-bordered table-striped" id="companies-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>company</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($compcord as $comp)
                    <tr>
                        <td>{{ $comp->id}}</td>
                        <td>{{ $comp->user->first_name }}</td>
                        <td>{{ $comp->company->name }}</td>

                        <td>
                            {!! Form::open(['route' => ['CompCoordinator.destroy', $comp->id], 'method' => 'delete']) !!}

                            <div class='btn-group'>
                            <a href="{{ route('CompCoordinator.show',$comp->id) }}"
                                class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>

                            <a href="{{ route('CompCoordinator.edit',$comp->id) }}" 
                                class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>

                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', 
                            ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
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
@extends('layouts.app')

@section('content')

<section class="content-header">
    <h1>
     coordinators
    </h1>
    <a class="btn btn-primary pull-right" style=
    "margin-top: -10px;margin-bottom: 5px" href="{{ route('UniCoordinator.create') }}"><i class="fa fa-plus-circle">Add NEW</i></a>
</section>

<div class="content">

    <div class="clearfix"></div>
    @include('flash::message')
    <div class="clearfix"></div>

    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
        <div class="box-body">

                <section class="container-fluid">
                    <table class="table" id="universities-table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>First Name</th>
                                    <th>From Univesity </th>
                                    <th colspan="3">Action</th>
                                </tr>
                            </thead>

                        <tbody>
                            @foreach($cor as $c )
                            <tr>
                                <td>{{ $c->id}}</td>
                                <td>{{ $c->user->first_name}}</td>
                                <td>{{ $c->university->name}}</td>
                                <td>
                                    {!! Form::open(['route' => ['UniCoordinator.destroy', $c->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>
                                        <a href="{{ route('UniCoordinator.show',$c->id) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                        <a href="{{ route('UniCoordinator.edit', $c->id) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                 {!! Form::button('<i class="glyphicon glyphicon-trash"></i>',['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
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
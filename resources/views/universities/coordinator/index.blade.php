@extends('layouts.app')

@section('content')

<section class="content-header">
    <h1>
        coordinators
    </h1>
    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('unicoordinator.create') }}"><i class="fa fa-plus-circle">Add Coo</i></a>
</section>
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
        <div class="box-body">
<section class="container-fluid">
    <table class="table" id="universities-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>User Id</th>
                <th>Univesity Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $universityco as $ls)
            <tr>
                <td>{{ $ls->id}}</td>
                <td>{{ $ls->user_id }}</td>
                <td>{{ $ls->university_id }}</td>
                <td>
                     {!! Form::open(['route' => ['unicoordinator.destroy', $ls->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('unicoordinator.show',$ls->id) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('unicoordinator.edit', $ls->id) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>  
       
</section>  
@endsection
@extends('layouts.app')
@section('content')
    
<section class="content-header">
    <h1>
 Departments
   
    <a class="btn btn-primary pull-right" style=
    "margin-top: -10px;margin-bottom: 5px" href="{{ route('UniCoordinator.create') }}"><i class="fa fa-plus-circle">Add NEW</i></a>
    </h1>
</section>
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
        <div class="box-body">
    <table class="table" id="advisor-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Departments</th> 
                        <th>Univesity Name</th>
                        <th>Univesity Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($depar as $ad )
                    <tr> 
                        <td>{{ $ad->id}}</td>
                        <td>{{ $ad->department_name }}</td>
                        <td>{{ $ad->university->name }}</td>
                        <td>{{ $ad->university->address }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>  
    </div>
    </div>
</div>
@endsection


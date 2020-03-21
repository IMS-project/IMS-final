@extends('layouts.app')
@section('content')
    <section class="content-header">
        <h1 class="pull-left">Departments</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('departments.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content"> 
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
@endsection


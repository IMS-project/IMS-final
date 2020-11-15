@extends('universityAdmin.app')

@section('content')

<section class="content-header">
   <h1>
 Advisors
   
    <a class="btn btn-primary pull-right" style=
    "margin-top: -5px;margin-bottom: 5px" href="{{ route('Advisor.create') }}"><i class="fa fa-plus-circle">Add NEW</i></a>
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
                    <table class="table" id="universities-table">
                            <thead>
                                <tr>
                                   
                                    <th>full name</th>
                                    <th>Department </th>
                                    <th colspan="3">Action</th>
                                </tr>
                            </thead>

                        <tbody>
                            @foreach($advisors as $c )
                            <tr>
                                <td>{{ $c->user->first_name}}  {{$c->user->last_name}}</td>
                                {{-- <td>{{ $c->id}}</td> --}}
    
                                <td>{{ $c->department->department_name}}</td>
                                <td>
                                    {!! Form::open(['route' => ['Advisor.destroy', $c->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>
                                        <a href="{{ route('Advisor.show',$c->id) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                        <a href="{{ route('Advisor.edit', $c->id) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
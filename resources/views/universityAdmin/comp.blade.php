@extends('universityAdmin.app')

@section('content')
    <section class="content-header">
         
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style=
           "margin-top: -5px;margin-bottom: 5px" href="{{ route('company.create') }}"><i class="fa fa-plus">Add New</i></a>
        </h1>
        <h4 class="pull-left">Company list</h4>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    {{-- @include('companies.table') --}}
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="companies-table">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Company Name</th>
                                     <th>Address</th>
                                    <th colspan="3">Action</th> 
                                    
                                </tr>
                            </thead>
                    
                            <tbody>
                                
                            @foreach($companies as $company)
                            
                             <tr>
                                <td>{{ $company->id }}</td>
                    
                                    <td>{{ $company->name }}</td>
                                    
                                     <td>{{ $company->address }}</td>
                                     <td> 
                                        {!! Form::open(['route' => ['company.destroy',$company->id], 'method' => 'delete']) !!}
                                        <div class='btn-group'>
                                            <a href="{{ route('company.show', [$company->id]) }}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                            <a href="{{ route('company.edit', [$company->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                        </div>
                                        {!! Form::close() !!}
                                  </td> 
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

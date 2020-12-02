@extends('Advisor.app')

@section('content')
    <section class="content-header">
        <h4 class="pull-left">Advisors page</h4>
        
        {{-- <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style=
           "margin-top: -10px;margin-bottom: 5px" href="{{ route('universities.create') }}"><i class="fa fa-plus-circle">Add New</i></a>
        </h1> --}}
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="companies-table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Full Name</th>   
                                <th>company</th>   
                                <th>department</th>   
                            </tr>
                        </thead>
                
                        <tbody>
                            
                            @foreach ($students as $st)
                         <tr>
                         <td>{{$st->id}}</td>
                             <td>{{$st->placement->student->user->first_name}} {{$st->placement->student->user->last_name}}</td>
                         <td>{{$st->placement->company->name}}</td>
        
                                
                                @endforeach
                                
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
                    
                        
                   
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection


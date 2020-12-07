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
                                <th>Contact</th>
                            </tr>
                        </thead>
                
                        <tbody>
                           
                            @foreach($students as $st)
                            {{-- {{dd($st->studentplacement->student->user->first_name)}} --}}
                         <tr>
                        <td>{{$st->studentplacement->student->id}}</td>
                         <td>{{$st->studentplacement->student->user->first_name}} {{$st->studentplacement->student->user->last_name}}</td>
                         <td>{{$st->studentplacement->company->name}}</td>
                         <td>{{$st->studentplacement->companydepartment->department_name}}</td>
                            <td><a href="{{ route('sendmessage.show',$st->studentplacement->student->user->id)}}" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i>Send message</a></td>
                        
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


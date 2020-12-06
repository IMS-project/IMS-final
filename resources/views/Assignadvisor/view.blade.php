 
 @extends('universityAdmin.app')

 @section('content')
     <section class="content-header">
         <h4 class="pull-left">students at the specified company</h4>
     </section>
     <div class="content">
         <div class="clearfix"></div>
 
         @include('flash::message')
 
         <div class="clearfix"></div>
         <div class="box box-primary">
             <div class="box-body">
                     
                <table class="table table-bordered table-striped" id="companies-table">
                    <thead>
                        <th>Full Name</th>
                        <th>Company</th>
                        <th>Department</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                        <form method="GET" action="{{ route('assign')}}">
                            <input type="hidden" name="advisor" value="{{$id}}">
                            @foreach($students as $student)
                            <tr>
                            @if ($student->placement)
                                
                            <td>
                                <input type="checkbox"  name="student[]"  value="{{$student->placement->id}}" >
                                  {{$student->user->first_name}} {{$student->user->last_name}}
                                </td>
                            <td>{{$student->placement->company->name}}</td>
                            {{-- <td>{{$student->placement->department->department_name}}</td> --}}
                            
                            @endif
                        </tr>
                            @endforeach 
                             
                            <button class="btn btn-success pull-right" type="submit"><i class="fa fa-plus" aria-hidden="true"></i>
                                Assign</button> 
                        </tr>
                    </tbody>
                </table>
            </div>
         </div>
     
             
        <section class="content-header">
        <a class="btn btn-primary pull-left"  href="{{ route('Assignadvisor.index') }}">Back</a>
        </section>
    </div>
         <div class="text-center">
            
         </div>
 
 @endsection
 
 
 
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
                     
                <table class="table" id="companies-table">
                    <thead>
                        <tr>
                            <th>SN</th> 
                            <th>Number of students</th>
                            <th>Company</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $stu)
                        <tr>
                            <td>{{$stu->id}} </td>
                            <td>6 </td>
                            
                                  
                        @foreach ($placement as $row)
                            @if($row->student_id==$stu->id)
                            <td>{{$row->company->name}}</td> 
                            <td><a href="{{ route('assign',[$row->company_id,$id] )}}" class="btn btn-success">Assign</a> 
                            @endif
                        @endforeach       
                    </tr>
                        @endforeach

                    </tbody>                 
                </table>                                
             </div>
         </div>
         <div class="text-center">
            <section class="content-header">
            <a class="btn btn-primary pull-left" style=
            "margin-top: -2px;margin-bottom: 5px" href="{{ route('Assignadvisor.index') }}">Back</a>
        </section>
         </div>
     </div>
 @endsection
 
 
 
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
                        <tr>Name</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($company as $co) --}}
                        @foreach ($students as $row)
                        <tr> 


                        <td>{!! Form::checkbox('row[]',$row->id,null) !!}</td>
                        
                        
                            {{-- <td>{{ $placementcount[$co->id]}} </td>  --}}
                            <td>{{$row->user->first_name}}</td>
                            {{-- <td>{{$co->name}}</td>  --}}
                            <td><a href="{{ route('assign',[$row->id,$id] )}}" class="btn btn-success"><i class="fa fa-plus-circle"></i>Assign</a> 
                                  
                        </tr>
                        @endforeach  
                        {{-- @endforeach --}}

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
 
 
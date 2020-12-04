@extends('studentpage.app')

@section('content')
    <section class="content-header">
        <h4>
            Company information
        </h4>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    {{-- @include('Applicants.show_fields') --}}
                    <div class="form-group">
                        <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="companies-table">
                         
                                <thead class="thead-light">  
                                <tr>
    
                            <th>Name</th>
                            <th>Department</th>
                            <th>Duration</th>
                            <th>Action</th>
                            
                                </tr>
                            </thead>
                            <tbody>
                               
                            <td class="table-success">{{ $company->name }}</td>
                            
                            <td>
                                <form method="GET" action="{{ route('applicant')}}">
                                    {{csrf_field()}}
                                <input type="hidden" name="company" value="{{$company->id}}">
                                <select class="form-control" id="companydepartment_id" name="departments">
        
                                    @foreach ($department as $dep)
                                    <option value="{{$dep->id }}">{{ $dep->department_name}}</option>
                                    
                                    @endforeach
                                    </select>
                            </td>
                            
                                <td>
                                     <select class="form-control" id="duration_id" name="durations">
            
                                        @foreach ($durations as $duration)
                                        <option value="{{$duration->id }}">{{$duration->name}}</option>
                                        
                                        @endforeach
                                        </select>
                                </td>
                            
                                <td>
                                    <div class="btn-group">                                     
                                        @if($limits < 4)                                   
                                        <button type="submit" class="btn btn-success btn-sm" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Confirm terms">Apply</button>
                                
                                        @else
                                            <button type="submit" class="btn btn-success btn-sm" data-toggle="tooltip" rel="tooltip" data-placement="top" disabled="disabled" title="Reached maximum number of application">Apply</button>
                                
                                        @endif
                                    </div>
                                </td>
                            </form>
                            </tbody>
                        </table>
                        <table class="table table-bordered table-striped" id="companies-table">
                            <thead class="thead-light">
                                
                                <caption><h4>List of departments</h4></caption>
                                      <tr class="table-active">
                                  

                                    <th>Department</th>
                                    <th>Capacity</th>
                                    <th>Mini_grade</th>   
                                    <th>Duration</th>
                                    <th>Placed</th>
                                    <th>Pending</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($department as $depart)  
                                <tr>
                                    <td>{{$depart->department_name}}</td>
                                    <td>{{ $depart->offer_capacity }}</td>
                                    <td>{{ $depart->mini_grade}}</td>
                                    <td>{{ $depart->duration->name}}</td>
                                {{-- <td>{{($depart->department->status)}}</td> --}}
                                
                                </tr>
                                @endforeach
                            
                            </tbody>

                        </table>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
            <a href="{{ route('offer_company.index') }}" class="btn btn-primary">Back</a></td>
        
    </div>
@endsection

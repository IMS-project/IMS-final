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
                        <table class="table table-bordered" id="companies-table">
                            <thead>
                                <tr>
    
                            <th>Name</th>
                            <th>Capacity</th>
                            <th>Mini_grade</th>
                            {{-- <th>skills required</th> --}}
                            <th>Placed</th>
                            <th>Pending</th>
                            <th>Department</th>
                            <th>Duration</th>
                            <th>Action</th>
                            
                                </tr>
                            </thead>
                            <tbody>
                               
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->offer_capacity }}</td>
                                <td>{{ $company->mini_grade}}</td>
                                {{-- <td>{{ $company->other_skills }}</td> --}}
                                <td>{{ $placed }}</td>
                                <td>{{$applicants}}</td>
                                <td>
                                    <select class="form-control" id="department_id" name="department_id">
            
                                        @foreach ($departments as $dep)
                                        <option value="{{$dep->id }}">{{ $dep->department_name}}</option>
                                        
                                        @endforeach
                                        </select>
                                </td>
                                
                                <td>
                                     <select class="form-control" id="duration_id" name="duration_id">
            
                                        @foreach ($durations as $duration)
                                        <option value="{{$duration->id }}">{{$duration->name}}</option>
                                        
                                        @endforeach
                                        </select>
                                </td>
                                
                                <td>
                                    <div class="btn-group">                                     
                                        @if($limits < 4)
                                        <a href="{{route('applicant', [$company->id,$dep->id,$duration->id]) }}" type="submit" class="btn btn-success btn-sm" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Confirm terms">Apply</a>
                                
                                        @else
                                            <a type="submit" class="btn btn-success btn-sm" data-toggle="tooltip" rel="tooltip" data-placement="top" disabled="disabled" title="Reached maximum number of application">Apply</a>
                                
                                        @endif
                                    </div>
                                </td>
                                    
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

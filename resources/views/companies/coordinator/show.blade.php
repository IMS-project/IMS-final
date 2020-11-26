
@extends('superAdmin.app')

@section('content')
    <section class="content-header"> <h1> Coordinators</h1></section>

  <div class="content">
     <div class="box box-primary">
         <div class="box-body">
            <div class="row" style="padding-left: 20px">



                <div class="table-responsive">
                    <table class="table table-bordered" id="companies-table">
                        <thead>
                            <tr>
                                <th>Full name</th>
                               
                                <th>Email</th> 
                                <th>Phone</th>
                                                                              
                                <th>company</th>
        
                            </tr>
                        </thead>
        
                        <tbody>
                            <tr>
                                <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                              
                               
                                {{-- <td>{{ $cor->$department->department_name }}</td> --}}
                                <td>{{ $company->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>

            </div>
         </div></div>
                    <a href="{{ route('CompCoordinator.index') }}" class="btn btn-primary">Back</a>
                </div>
                
            </div>
        </div>
    </div>


@endsection
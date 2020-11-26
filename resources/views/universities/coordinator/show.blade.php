@extends('superAdmin.app')
@section('content')
    <section class="content-header"> <h1> Coordinator</h1></section>
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
                                                                              
                                <th>university</th>
        
                            </tr>
                        </thead>
        
                        <tbody>
                            <tr>
                                <td>{{ $users->first_name }} {{ $users->last_name }}</td>
                                
                                <td>{{ $users->email }}</td>
                                <td>{{ $users->phone }}</td>
                              
                               
                                {{-- <td>{{ $cor->$department->department_name }}</td> --}}
                                <td>{{ $university->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
            </div></div></div>

                    <a href="{{ route('UniCoordinator.index') }}" class="btn btn-primary">Back</a>


            
                
                </div>
                
            </div>
        </div>
    </div>


@endsection
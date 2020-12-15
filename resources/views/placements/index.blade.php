@extends('studentpage.app')
@section('content')
    <section class="content-header">
        <h4 class="pull-left">Request status</h4>
        {{-- <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style=
           "margin-top: -10px;margin-bottom: 5px" href="{{ route('companies.create') }}"><i class="fa fa-plus-circle">Add New</i></a>
        </h1> --}}
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="universities-table">
                            <thead>
                                
                                <tr>
                                    <th>Company</th>
                                    <th>Status</th>
                                    <th>Action</th> 
                                </tr>
                                </h5>
                            </thead>
                            <tbody>
                                @foreach ($applicants as $row)
                                <tr>
    
                                   <td> {{$row->company->name}}</td>
                                    <td>{{$row->status}}</td>
                                    {{-- @if($row->status=="approved")
                                    <td><a href="{{ route('accept',[$row->company->id,$row->department_id]) }}" class="btn btn-success">accept</a></td>
                                    @endif --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>   
            </div>
        </div>
    </div>
@endsection


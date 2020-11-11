@extends('Applicants.app')
@section('content')
    <section class="content-header">
        <h1 class="pull-left">placement infrormation</h1>
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
                    {{-- @include('Applicants.table') --}}
                    <div class="table-responsive">
                        <table class="table" id="universities-table">
                            <thead>
                                <h5 class="font-italic">
                                <tr>

                                    {{-- <th>Name</th> --}}
                                    <th>company</th>
                                    <th>status</th>
                                    
                                </tr>
                                </h5>
                            </thead>
                            <tbody>
                                @foreach ($applicants as $row)
                                <tr>
                                   {{-- <td>{{$row->student->user->first_name}}</td>  --}}
                                   <td> {{$row->company->name}}</td>
                                    <td>{{$row->status}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>   
            </div>
        </div>
    </div>
@endsection

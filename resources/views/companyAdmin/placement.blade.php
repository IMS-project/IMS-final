@extends('companyAdmin.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Internship offer companies</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    {{-- @include('Applicants.table') --}}
                    <div class="table-responsive">
                        <table class="table" id="companies-table">
                            <thead>
                                <tr>
                                    
                                    <th>Name of Company</th>
                                    <th>Adress</th>    
                                    <th>status</th>   
                                </tr>
                            </thead>
                    
                            <tbody>
                                
                            @foreach($applicants as $p)
                            {{-- @foreach ($applicants as $row) --}}
                             <tr>
                                 <td>{{$p->company->name}}</td>
                                 <td>{{$p->company->address}}</td>
                                 
                                    {{-- <td><a href="{{ route('students.show', [$company->id]) }}">{{ $company->name }}</a></td> --}}
                                    {{-- <td> {{$row->status}}</td> --}}
                                    {{-- @endforeach --}}
                                    @endforeach
                                    
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>
                    
                    
            </div>
        </div>
    </div>
@endsection


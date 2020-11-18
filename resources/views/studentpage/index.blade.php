@extends('studentpage.app')

@section('content')
    <section class="content-header">
        <h4 class="pull-left">Internship offer companies</h4>
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
                                    <th>SN</th>
                                    <th>Name of Company</th>   
                                    <th>status</th>   
                                </tr>
                            </thead>
                    
                            <tbody>
                                
                            @foreach($companies as $company)
                            {{-- @foreach ($applicants as $row) --}}
                             <tr>
                                 <td>{{$company->id}}</td>
                                    <td><a href="{{ route('offer_company.show', [$company->id]) }}">{{ $company->name }}</a></td>
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


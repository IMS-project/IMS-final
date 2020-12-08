@extends('universityAdmin.app')

@section('content')
    <section class="content-header">
        <h4>
            Company Information
        </h4>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <table class="table table-bordered table-striped" id="companies-table">
                        <thead>
                            <tr>
                                <th>NAme</th>
                                <th>Address</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->address }}</td>
                               
                                
                        
                            </tr>

                        </tbody>
                 </table>
                     
                </div></div></div>
                    <a href="{{ route('company.index') }}" class="btn btn-primary">Back</a>
                </div>
                
           
@endsection

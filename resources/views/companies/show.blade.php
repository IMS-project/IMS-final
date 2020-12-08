@extends('superAdmin.app')

@section('content')
    <section class="content-header"> <h4>Company information </h4></section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">


     <table class="table table-bordered table-striped" id="companies-table" >
          <thead>
             <tr>
                <th>Name</th>
                <th>Address</th>
                
            </tr>
        </thead>

         <tbody>
            <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->address}}</td>
                
            </tr>
         </tbody>
    </table>
  
                    {{-- <a href="{{ route('companies.index') }}" class="btn btn-success">apply here</a> --}}
                </div></div></div>
                    <a href="{{ route('companies.index') }}" class="btn btn-primary">Back</a>
                
    </div>
@endsection

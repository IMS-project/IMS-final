@extends('superAdmin.app')

@section('content')
    <section class="content-header"> <h1>Company </h1></section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">


     <table class= "table" id="companies-table" >
          <thead>
             <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Work_area</th>
                <th>Offer_capacity</th>
                <th>Mini_grade</th>
                <th>Other_skills</th>
            </tr>
        </thead>

         <tbody>
            <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->address }}</td>
                <td>{{ $company->work_area }}</td>
                <td>{{ $company->offer_capacity</td>
                <td>{{ $company->mini_grade}}</td>
                <td>{{ $company->other_skills }}</td>
            </tr>
         </tbody>
    </table>
  
                    {{-- <a href="{{ route('companies.index') }}" class="btn btn-success">apply here</a> --}}
                        <a href="{{ route('companies.index') }}" class="btn btn-primary">back</a>
                </div>
                
            </div>
        </div>
    </div>
@endsection

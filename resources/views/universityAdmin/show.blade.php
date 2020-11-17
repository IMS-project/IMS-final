@extends('universityAdmin.app')

@section('content')
    <section class="content-header">
        <h1>
            Company
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <table class="table" id="companies-table">
                        <thead>
                            <tr>
                                <th>NAme</th>
                                <th>Address</th>
                                <th>work_area</th>
                                <th>offer_capacity</th>
                                <th>CGPA</th>
                                <th>other_skills</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->address }}</td>
                                <td>{{ $company->work_area }}</td>
                                <td>{{ $company->offer_capacity }}</td>
                                <td>{{ $company->mini_grade}}</td>
                                <td>{{ $company->other_skills }}</td>
                                
                        
                            </tr>

                        </tbody>
                 </table>
                     
                </div></div></div>
                    <a href="{{ route('company.index') }}" class="btn btn-primary">back</a>
                </div>
                
            </div>
        </div>
    </div>
@endsection

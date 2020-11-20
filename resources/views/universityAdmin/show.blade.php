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
                    <table class="table table-bordered" id="companies-table">
                        <thead>
                            <tr>
                                <th>NAme</th>
                                <th>Address</th>
                                <th>Offer_capacity</th>
                                <th>CGPA</th>
                                <th>Other_skills</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->address }}</td>
                                <td>{{ $company->offer_capacity }}</td>
                                <td>{{ $company->mini_grade}}</td>
                                <td>{{ $company->other_skills }}</td>
                                
                        
                            </tr>

                        </tbody>
                 </table>
                     
                </div></div></div>
                    <a href="{{ route('company.index') }}" class="btn btn-primary">Back</a>
                </div>
                
            </div>
        </div>
    </div>
@endsection

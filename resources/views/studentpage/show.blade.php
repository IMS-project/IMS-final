@extends('studentpage.app')

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
                    {{-- @include('Applicants.show_fields') --}}
                    <div class="form-group">
                        <div class="table-responsive">
                        <table class="table" id="companies-table">
                            <thead>
                                <tr>
                            <th>SN</th>
                            <th>company name</th>
                            {{-- <th>work_area</th> --}}
                            <th>offer_capacity</th>
                            <th>mini_grade</th>
                            <th>skills required</th>
                            <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>{{$company->id}}</td>
                                <td>{{ $company->name }}</td>
                                {{-- <td>{{ $company->work_area }}</td> --}}
                                <td>{{ $company->offer_capacity }}</td>
                                <td>{{ $company->mini_grade}}</td>
                                <td>{{ $company->other_skills }}</td>
                                <td><a href="{{ route('applicant',[$company->id]) }}" class="btn btn-success">apply here</a>
                                    <a href="{{ route('students.index') }}" class="btn btn-primary">back</a></td>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
@endsection

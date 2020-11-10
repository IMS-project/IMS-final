@extends('companypage\layouts.studapp')
@section('content')
    <section class="content-header">
        <h1>
            applicant info
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('applicantInfo.show_fields')
                    {{-- <a href="{{ route('applicants',[$company ?? ''->id]) }}" class="btn btn-success">apply here</a> --}}
                    <a href="{{ route('Applicants.index') }}" class="btn btn-primary">back</a>
                </div>
                
            </div>
        </div>
    </div>
@endsection

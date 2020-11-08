@extends('application\layouts.studapp')

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
                    @include('Applicants.show_fields')
                    <a href="{{ route('applicant',[$company->id]) }}" class="btn btn-success">apply here</a>
                    <a href="{{ route('Applicants.index') }}" class="btn btn-primary">back</a>
                </div>
                
            </div>
        </div>
    </div>
@endsection

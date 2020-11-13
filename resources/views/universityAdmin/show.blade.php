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
                    {{-- @include('companies.show_fields') --}}
                    {{-- <a href="{{ route('companies.index') }}" class="btn btn-success">apply here</a> --}}
                    <!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('name', 'name:') !!}
    <p>{{ $company->name }}</p>
</div> --}}
<div class="form-group">
    {!! Form::label('name', 'name:') !!}
    <p>{{ $company->name }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('address', 'address:') !!}
    <p>{{ $company->address }}</p>
</div>

<div class="form-group">
    {!! Form::label('work_area', 'work_area:') !!}
    <p>{{ $company->work_area }}</p>
</div>
<div class="form-group">
    {!! Form::label('offer_capacity', 'offer_capacity:') !!}
    <p>{{ $company->offer_capacity }}</p>
</div>
<div class="form-group">
    {!! Form::label('mini_grade', 'mini_grade:') !!}
    <p>{{ $company->mini_grade}}</p>
</div>
<div class="form-group">
    {!! Form::label('other_skills', 'other_skills:') !!}
    <p>{{ $company->other_skills }}</p>
</div>
                    <a href="{{ route('company.index') }}" class="btn btn-primary">back</a>
                </div>
                
            </div>
        </div>
    </div>
@endsection

@extends('universityAdmin.app')

@section('content')
<section class="content-header">
    <h1 class="pull-left">student information</h1>
    <a class="btn btn-primary pull-right" style=
    "margin-top: -10px;margin-bottom: 5px" href="{{ route('Student.create') }}"><i class="fa fa-plus-circle">Add Student</i></a>
   
</section>

<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">

            <form style="#a1a1a1;margin-top: 8px;padding: 5px;" action="{{ url('/import/import-excel') }}" method="post" enctype="multipart/form-data">

                @csrf
                <input type="file" name="import_file" class="form-group" />
                <button class="btn btn-success pull-right"><i class="fa fa-upload" aria-hidden="true"></i>
                    upload files</button>
            </form>
            {{-- @include('universities.student.index') --}}
        </div>
</div>
</div>
@endsection

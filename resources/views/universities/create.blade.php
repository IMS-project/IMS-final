@extends('superAdmin.app')

@section('content')
    <section class="content-header">
        <h1>
            University
        </h1>
    </section>
    
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">

                 <div class="row">
                    {!! Form::open(['route' => 'universities.store']) !!}


<!--name field-->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Add', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('universities.index') }}" class="btn btn-default">Cancel</a>
</div>

                       
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endsection

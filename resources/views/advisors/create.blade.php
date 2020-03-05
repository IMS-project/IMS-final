@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Advisor
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'advisors.store']) !!}

                        @include('advisors.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('Advisor.app')

@section('content')
    <section class="content-header">
        <h4 class="pull-left">Advisors page</h4>
        
        {{-- <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style=
           "margin-top: -10px;margin-bottom: 5px" href="{{ route('universities.create') }}"><i class="fa fa-plus-circle">Add New</i></a>
        </h1> --}}
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    {{-- @include('universities.table') --}}
                    @foreach ($students as $st)
                        {{$stu->user->first_name}}
                    @endforeach
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection


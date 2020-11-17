@extends('universityAdmin.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Advisors at the department</h1>
        
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
                    @foreach($advisors as $advasor)
                            {{-- @foreach ($applicants as $row) --}}
                             <tr>
                                 <td>{{$advasor->id}}</td>
                                    <td><a href="{{ route('Assignadvisor.show', [$advasor->id]) }}">{{ $advasor->user->first_name }}</a></td>
                                    {{-- <td> {{$row->status}}</td> --}}
                                    {{-- @endforeach --}}
                                    @endforeach
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

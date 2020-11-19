@extends('companyAdmin.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">supervisors at the department</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table" id="companies-table">
                    <thead>
                        <tr>
                            <th>Full name</th>
                            <th>students</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($supervisor as $super)
                        <tr>
                        <td>{{$super->user->first_name}}  {{$super->user->last_name}}</td>
                        
                            <td><a href="{{ route('Assignsuper.show', [$super->id]) }}">{{$super->user->first_name}} {{$super->user->last_name}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                   
                </table>
                                        
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection


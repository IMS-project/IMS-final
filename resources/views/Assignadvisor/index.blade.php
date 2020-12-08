@extends('universityAdmin.app')

@section('content')
    <section class="content-header">
        <caption><h4>List of Advisors</h4></caption>
        
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($advisors as $advisor)
                        <tr>
                            <td><a href="{{ route('Assignadvisor.show', [$advisor->id]) }}">{{ $advisor->user->first_name }}   {{ $advisor->user->last_name }}</a></td>
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


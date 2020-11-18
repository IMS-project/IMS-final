@extends('universityAdmin.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Advisors at the department</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @foreach($advisors as $advisor)
                             <tr>
                            <td><a href="{{ route('Assignadvisor.show', [$advisor->id]) }}">{{ $advisor->user->first_name }}</a></td>
                            
                            @endforeach
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection


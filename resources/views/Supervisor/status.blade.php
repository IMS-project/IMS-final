@extends('Supervisor.app')

@section('content')
<section class="content-header">
    <h4 class="pull-left"><i class="fa fa-calendar" aria-hidden="true"></i> upcomming events</h1>
   
</section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                <th>Student</th>
                <th>Date</th>
                <th>Status</th>
            </thead>
            <tbody>
                @foreach ($attendance as $attend)
                    <tr>
                    <td>{{$attend->student->user->first_name}}</td>
                    <td>{{$attend->date}}</td>
                    <td>{{$attend->status}}</td>


                    </tr>
                @endforeach


            </tbody>
                    </table>
                   
    
                </div>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection
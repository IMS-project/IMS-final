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
                <form method="post" action="{{ route('Assignsuper.store') }}" enctype="multipart/form-data">

                    @csrf
                <table class="table" id="companies-table">
                    <thead>
                        <tr>
                            {{-- <th>Full name</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($placements as $super)
                        <tr>
                        
                        <td><input type="checkbox" name="selected_values[]" value="{{$super->id}}"> {{$super->student->user->first_name}} </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
                   
                </table>
                <button type="submit" name="button" >Assign</button>
                                        
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection


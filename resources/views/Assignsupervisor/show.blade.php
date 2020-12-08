@extends('companyAdmin.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Students List</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
         <div class="box-body">
            <table class="table" id="companies-table">
                    <thead>
                        <tr>Name</th>
                            </tr>
                    </thead>
                    <tbody>
                        <tr>     
                        <form method="GET" action="{{ route('assignsuper')}}">
                            <input type="hidden" name="supervisor" value="{{$id}}">
                            @foreach($placements as $super)
                            <tr>     
                            <td>
                                <input type="checkbox" name="student[]"   value="{{$super->id}}" >
                                  {{$super->student->user->first_name}}  {{$super->student->user->last_name}}
                                </td>       
                        </tr>
                            @endforeach 
                             
                            <button class="btn btn-success pull-right" type="submit"><i class="fa fa-plus" aria-hidden="true"></i>
                                Assign</button> 
                        </tr>              
                    </form>
                    </tbody>                 
                </table>          
            </div>
        </div>
            <section class="content-header">
                <a class="btn btn-primary pull-left"  href="{{ route('Assignsuper.index') }}">Back</a>
            </section>
     </div>
                                        
     

@endsection


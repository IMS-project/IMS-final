@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-dafault">
            <div class="panel-heading">
            university
          {{-- @can('update', $universities)
    <!-- The Current User Can Update The Post -->
@elsecan('create', App\University::class)
    <!-- The Current User Can Create New Post -->
@endcan
--}}
@if(Auth::user()->role==1)
            <a href="{{'/university/create'}}" class="pull-right btn btn-sm btn-primary">add university</a>  
    @endif
            </div>

            <div class="panel-body">
                <div class="row">
                    @foreach($universities  as $un)

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                                
                                {{ $un->name }}

                            </div>

                        </div>

                    </div>
                    @endforeach


                </div>

            </div>

        </div>


    </div>

</div>
    
@endsection

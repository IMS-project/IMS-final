@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1 class="pull-left">Universities</h1>
    <h1 class="pull-right">
       {{-- <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('universities.create') }}"><i class="fa fa-plus-circle">Add New</i></a> --}}
       <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('UniCoordinator.create') }}"><i class="fa fa-plus-circle">Add Coo</i></a>
    </h1>
</section>
  @foreach($unicoordinator as $l)
        <h3>{{ $l->user_id}}</h3>
  @endforeach
@endsection
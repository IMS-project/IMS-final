
@extends('layouts.app')

@section('content')

@foreach ($unicoordinator as $d)

<h2>{{ $d->user_id}}</h2>
    
@endforeach
    {{-- <section class="content-header">
        <h1>
           coordinator
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
<form method="POST" action="{{route('unicoordinator.update',$unicoordinator->id)}}" enctype="multipart/form-data">
	{{csrf_field()}}
    @method('PUT')
    <div class="form-group row">
        <lable for = "name" class = "col-sm-1 col-form-label">name</lable>
        <div class="col-sm-6">
        <input type="text" name="name" class="form-control" id="name" value="{{$unicoordinator->name}}">
    </div></div>






</form> --}}

    @endsection
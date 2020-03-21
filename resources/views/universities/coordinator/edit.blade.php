
@extends('layouts.app')

@section('content')

@foreach ($unicoordinator as $cord)

<h2>{{ $cord->user_id}}</h2>
    
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
            {!! Form::model($university, ['route' => ['universities.update', $university->id], 'method' => 'patch']) !!}
<form method="POST" action="{{route('UniCoordinator.update',$unicoordinator->id)}}" enctype="multipart/form-data">
	{{csrf_field()}}
    @method('PUT')


    <div class="form-group row">
        <lable for = "name" class = "col-sm-1 col-form-label">name</lable>
        <div class="col-sm-6">
        <input type="text" name="name" class="form-control" id="name" value="{{$unicoordinator->name}}">
    </div></div>

</form> --}}

    @endsection
@extends('layouts.app')

@section('content')

<div class="container">

	<h4>{{$university->name}}</h4>
	<small>written on {{$university->created_at}}</small>
<div>
	{{$university->address}}
</div>

	{{--<small>written on {{$university->created_at}}by {{$students->user->name}}</small>--}}
	<hr>
	<a href="#" class="btn btn-success">Go Back</a>
   @if(!Auth::guest())
      @if(Auth::user()->id==$->user_id)
	<a href="/students/{{$students->id}}/edit" class="btn btn-info">Edit</a>
	<div align="right">
	<a href="/students" class="btn btn-success">Go Back</a>
</div>
@endif
@endif

@endsection

@extends('layouts.app')

@section('content')

<div class="container">
<h1>edit students list</h1>

	<form method="POST" action="{{route('University.update',$university->id)}}" enctype="multipart/form-data">
	{{csrf_field()}}
	@method('PUT')

<div class="form-group row">
  <lable for = "titleid" class = "col-sm-1 col-form-label">title</lable>
  <div class="col-sm-9">
    <input type="text" name="name" class="form-control" id="name" placeholder="student title" value="{{$university->name}}">
</div></div>
<div class="form-group row">
		 <lable for = "bodyid" class = "col-sm-1 col-form-label">address</lable>
		<div class="col-sm-9">
		<textarea class="form-control" id="bodyid" name="body">{{$university->address}}
</textarea>   
</div>
</div>
<div class="form-group row">
	<div class="offset-sm-1 col-sm-9">
		<button type="submit" class="btn btn-primary">submit</button>
		</div>
	</div>
</form> 
@endsection

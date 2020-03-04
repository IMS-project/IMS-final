@extends('layouts.app')

@section('content')

<div class="container">
<h1>create university</h1>
<form method="post" action="/university" enctype="multipart/form-data">
	{{csrf_field()}}

<div class="form-group row">
	<lable for = "titleid" class = "col-sm-1 col-form-label">name</lable>
	<div class="col-sm-9">
		<input type="text" name="name" class="form-control" id="titleid" placeholder="university name">
</div></div>
<div class="form-group row">
	<lable for = "titleid" class = "col-sm-1 col-form-label">address</lable>
	<div class="col-sm-9">
		<input type="text" name="address" class="form-control" id="titleid" placeholder="address">
</div></div>

<div class="form-group row">
	<div class="offset-sm-1 col-sm-9">
		<button type="submit" class="btn btn-primary">submit</button>
	</div>
	</div>
</form>
@endsection   

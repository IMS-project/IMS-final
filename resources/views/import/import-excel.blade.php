@extends('layouts.app')

@section('content')
<div class="container">

    @if ($errors->any())

        <div class="alert alert-danger">

            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    @if (Session::has('success'))

        <div class="alert alert-success">

            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

            <p>{{ Session::get('success') }}</p>

        </div>

    @endif

    <div class="card">

        <div class="card-body">

            <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ url('/import/import-excel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">

                @csrf
                <input type="file" name="import_file" class="form-control" />

                <button class="btn btn-primary">Import File</button>

            </form>


        </div>

    </div>

</div>
<table class="table table-bordered">
    <tr>
        <th>name</th>
        <th>sex</th>
        <th>phone</th>
        <th>email</th>
    </tr>
@foreach ($users as $user)
<tr>
    <td>{{$user->name}}</td>
    <td>{{$user->sex}}</td>
    <td>{{$user->phone}}</td>
    <td>{{$user->email}}</td>

</tr>
    
@endforeach
</table>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/ 4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection

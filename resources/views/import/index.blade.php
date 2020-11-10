@extends('universityAdmin.app')

@section('content')
<section class="content-header">
    <h1 class="pull-left">import-excel</h1>
    
   
</section>

<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">

            <form style="#a1a1a1;margin-top: 8px;padding: 5px;" action="{{ url('/import/import-excel') }}" method="post" enctype="multipart/form-data">

                @csrf
                <input type="file" name="import_file" class="form-group" />
                <button class="btn btn-success pull-right">upload files</button>

            </form>

            
        </div>

   
    <table class="table table-bordered striped">
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
</div>
</div>


@endsection

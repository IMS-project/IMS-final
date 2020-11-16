@extends('SuperAdmin.app')

@section('content')
    <section class="content-header"> <h1>  University </h1></section>
 <div class="content">
     <div class="box box-primary">
         <div class="box-body">
            <div class="row" style="padding-left: 20px">

    <table class= "table" id="universitie-table" >
          <thead>
             <tr>
                <th>Name</th>
                <th>Address</th>
            </tr>
        </thead>

         <tbody>
            <tr>
                <td>{{ $university->name }}</td>
                <td>{{ $university->address }}</td>
            </tr>
         </tbody>
    </table>
  
    <a href="{{ route('universities.index') }}" class="btn btn-success">Back</a>
    
             </div>
            </div>
        </div>
    </div>
@endsection

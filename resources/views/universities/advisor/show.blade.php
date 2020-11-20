
@extends('universityAdmin.app')

@section('content')
    <section class="content-header"> <h1> Advisor </h1></section>

  <div class="content">
     <div class="box box-primary">
         <div class="box-body">
            <div class="row" style="padding-left: 20px">
                <table class="table table-bordered" id="companies-table">
                    <thead>
                        <tr>

                            <th>Full NAme</th>
                            <th>Email</th>
                            <th>phone</th>
                            <th>sex</th>
                            <th>Department</th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        <td>{{$users->first_name }}  {{ $users->last_name }}</td>
                        <td>{{$users->email }}</td>
                        <td>{{$users->phone }}</td>
                        <td>{{$users->sex }}</td>
                        <td>{{$advisors->department->department_name }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
                </table>

            </div></div></div>
            
                    <a href="{{ route('Advisor.index') }}" class="btn btn-success">Back</a>
                
    </div>


@endsection
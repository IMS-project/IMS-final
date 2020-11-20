
@extends('companyAdmin.app')

@section('content')
    <section class="content-header"> <h1>Department information</h1></section>

  <div class="content">
     <div class="box box-primary">
         <div class="box-body">
            <div class="row" style="padding-left: 20px">
                <table class="table table-bordered" id="companies-table">
                    <thead>
                        <tr>
                            
                            <th>Department name</th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                       
                        <td>{{ $departments->department_name }}</td>
                    </tr>

                </tbody>
                </table>
            </div></div>
     </div>      
                    <a href="{{ route('companydepartments.index') }}" class="btn btn-primary">Back</a>
                </div>
                
            </div>
        </div>
    </div>
@endsection
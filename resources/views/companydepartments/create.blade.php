@extends('companyAdmin.app')

@section('content')
    <section class="content-header">
        <h1>
          Departments
        </h1>
    </section>

      <div class="content">
        @include('adminlte-templates::common.errors')
         <div class="box box-primary">
            <div class="box-body">

        <form method="post" action="{{ route('companydepartments.store')}}">
              {{csrf_field()}}
                    <!-- Department Name Field -->
              <div class="form-group row">
                  <lable for = "name" class = "col-sm-1 col-form-label">Department Name:</lable>
                   <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="department name" required>
                   </div>
                </div>
            </div>
                <!-- User Id Field -->

                <div class="form-group row">
                  <div class="col-sm-6 pull-right">
                    <button class="btn btn-success" type="submit"> Save</button>
                    <a href="{{ route('companydepartments.index') }}" class="btn btn-default">Cancel</a>
                  </div>
                </div>

              </form>
            </div>
        </div>
        <div class="col-sm-2"></div>
     </div>
@endsection

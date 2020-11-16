@extends('universityAdmin.app')

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

        <form method="post" action="{{ route('departments.store')}}">
              {{csrf_field()}}
                    <!-- Department Name Field -->
              <div class="form-group row">
                  <lable for = "name" class = "col-sm-1 col-form-label">Department Name:</lable>
                   <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="department name" required>
                   </div>
                </div>

                {{-- <div class="form-group row">
               <lable for = "university" class = "col-sm-1 col-form-label"><h5>University:</h5></lable>
                 <div class="col-sm-6">
                  <select name="university" id="name" type ="text" class="form-control" value="{{ old('university_id') }}">
                     @foreach ($university as $uni)
                     <option value="{{ $uni->id }}">{{ $uni->name }}</option>
                     @endforeach
                   </select> 
              </div> --}}
            </div>
                <!-- User Id Field -->

                <div class="form-group row">
                  <div class="col-sm-6 pull-right">
                    <button class="btn btn-success" type="submit"> Save</button>
                    <a href="{{ route('departments.index') }}" class="btn btn-default">Cancel</a>
                  </div>
                </div>

              </form>
            </div>
        </div>
        <div class="col-sm-2"></div>
     </div>
@endsection

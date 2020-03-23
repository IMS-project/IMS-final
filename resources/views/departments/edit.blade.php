@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Departments
        </h1>
        {{-- <a href="{{ route('')}}"></a><button class="btn btn-primary"> View List</button> --}}
   </section>

   <div class="content">
      @include('adminlte-templates::common.errors')
      <div class="box box-primary">

       <form method="post" action="{{ route('departments.update', $department->id)}}" enctype="multipart/form-data">
            {{csrf_field()}}
            @method('PUT')

                <!-- Department Name Field -->
               <div class="form-group row">
                  <lable for = "name" class = "col-sm-1 col-form-label">Department Name:</lable>
                   <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
                   </div>
                </div>
                <!-- University Id Field -->
                <div class="form-group row">
                  <lable for = "university_id" class = "col-sm-1 col-form-label">University Id:</lable>
                   <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="university-id" required>
                   </div>
                </div>
                <!-- User Id Field -->
                <div class="form-group row">
                  <lable for = "user_id" class = "col-sm-1 col-form-label">User Id:</lable>
                   <div class="col-sm-6">
                    <input type="text" name="userid" class="form-control" id="name" placeholder="user-id" required>
                   </div>
                </div>

               <div class="form-group row">
                    <div class="col-sm-6 pull-right">
                        <button class="btn btn-success" type="submit"> update</button>
                        <a href="{{ route('departments.index') }}" class="btn btn-default">Cancel</a>
                    </div>
                 </div>

         </form>
     <div class="col-sm-2"></div>
  </div>
</div>
@endsection()


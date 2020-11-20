@extends('companyAdmin.app')

@section('content')
    <section class="content-header">
        <h4>
            Department edit
        </h4>
        {{-- <a href="{{ route('')}}"></a><button class="btn btn-primary"> View List</button> --}}
   </section>

   <div class="content">
      @include('adminlte-templates::common.errors')
      <div class="box box-primary">
        <div class="row" style="padding: 25px">

       <form method="post" action="{{ route('companydepartments.update', $departments->id)}}" enctype="multipart/form-data">
            {{csrf_field()}}
            @method('PUT')

                <!-- Department Name Field -->
               <div class="form-group row">
                  <lable for = "name" class = "col-sm-1 col-form-label">Department:</lable>
                   <div class="col-sm-6">
                    <input type="text" name="department_name" class="form-control" id="name" placeholder="name" value="{{$departments->department_name}}" required>
                   </div>
                </div>
                <!-- University Id Field -->
          
          
               

               <div class="form-group row">
                    <div class="col-sm-6 pull-right">
                        <button class="btn btn-success" type="submit"> update</button>
                        <a href="{{ route('departments.index') }}" class="btn btn-default">Cancel</a>
                    </div>
                 </div>

         </form>
      </div></div>
      </div>
      
@endsection()


  @extends('superAdmin.app')

@section('content')
  <section class="content-header">
      <h4>
  company user
      </h4>
  {{-- <a href="{{ route('')}}"></a><button class="btn btn-primary"> View List</button> --}}
  </section>
  <div class="content">
  @include('adminlte-templates::common.errors')
  <div class="box box-primary">
    
    <div class="row" style="padding: 25px">
      <form method="post" action="{{ route('CompCoordinator.update', $compcord->id)}}" enctype="multipart/form-data" class="form-horizontal form-bordered>
          {{csrf_field()}}
          @method('PUT')

          <div class="form-group row">
                <lable for = "first name" class = "col-sm-1 col-form-label"><h5>First Name:</h5></lable>
                <div class="col-sm-6">
                    <input type="text" name="first name" class="form-control" value="{{$users->first_name}}" id="name" placeholder="first_name" required>
            </div></div>


          <div class="form-group row">
              <lable for = "name" class = "col-sm-1 col-form-label"><h5>Last Name:</h5></lable>
              <div class="col-sm-6">
                  <input type="text" name="last name" class="form-control" value="{{$users->last_name}}" id="name" placeholder="user name" required>
          </div></div>


          <div class="form-group row">
              <lable for = "email" class = "col-sm-1 col-form-label"><h5>Email:</h5></lable>
              <div class="col-sm-6">
                  <input type="email" name="email" class="form-control" id="titleid" value="{{$users->email}}" placeholder="email" required>
          </div></div>
          
          <div class="form-group row">
              <lable for = "phone" class = "col-sm-1 col-form-label"><h5>Phone:</h5></lable>
              <div class="col-sm-6">
                  <input type="text" name="phone" class="form-control" id="phone" value="{{$users->phone}}"  placeholder="phone" required>
          </div></div>

         
{{-- 
          <div class="form-group row">
              <lable for = "phone" class = "col-sm-1 col-form-label"><h5>Company:</h5></lable>
              <div class="col-sm-6">

                 <select id="name" type ="text" class="form-control" value="{{ $company->name }}">
                   @foreach ($company as $comp)
                   
                   <option value="{{$comp->id }}">{{$comp->name}}</option>
                   
                   @endforeach
               </select>  
               </div> 
               </div> --}}

                  <div class="form-group row">
                  <div class="col-sm-6 pull-right">
                      <button class="btn btn-success" type="submit"> update</button>
                      <a href="{{ route('CompCoordinator.index') }}" class="btn btn-default">Cancel</a>
                  </div>
                  </div>
      </form>
    </div>
  <div class="col-sm-2"></div>
</div>
</div>
@endsection() 
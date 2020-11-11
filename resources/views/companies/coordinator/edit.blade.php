  @extends('layouts.app')

@section('content')
  <section class="content-header">
      <h1>
  Coodinators
      </h1>
  {{-- <a href="{{ route('')}}"></a><button class="btn btn-primary"> View List</button> --}}
  </section>
  <div class="content">
  @include('adminlte-templates::common.errors')
  <div class="box box-primary">
    

      <form method="post" action="{{ route('CompCoordinator.update', $compcord->id)}}" enctype="multipart/form-data">
          {{csrf_field()}}
          @method('PUT')

          <div class="form-group row">
                <lable for = "first name" class = "col-sm-1 col-form-label"><h5>First Name:</h5></lable>
                <div class="col-sm-6">
                    <input type="text" name="first name" class="form-control" value="{{$users->first_name}}" id="name" placeholder="first_name" required>
            </div></div>

            <div class="form-group row">
                <lable for = "last name" class = "col-sm-1 col-form-label"><h5>Last Name:</h5></lable>
                <div class="col-sm-6">
                    <input type="text" name="last name" class="form-control" value="{{$users->last_name}}" id="name" placeholder="last_name" required>
            </div></div>

          <div class="form-group row">
              <lable for = "name" class = "col-sm-1 col-form-label"><h5>Last Name:</h5></lable>
              <div class="col-sm-6">
                  <input type="text" name="name" class="form-control" value="{{$users->name}}" id="name" placeholder="user name" required>
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

          <div class="form-group row">
          <lable for = "gender" class = "col-sm-1 col-form-label"><h5>Gender:</h5></lable>
          <div class="col-sm-6">
              <select id="" class=" form-control" name = 'sex'  required>
        
                  @if ($users->sex=="Male")
                  <option value="male" selected>Male</option>
                  <option value="female">Female</option>
                  @elseif($users->sex=="Female")
                  <option value="male">Male</option>
                  <option value="female" selected>Female</option>
                  @endif
            </select> 
            </div>
           </div>

          <div class="form-group row">
              <lable for = "phone" class = "col-sm-1 col-form-label"><h5>Company:</h5></lable>
              <div class="col-sm-6">

                 <select id="name" type ="text" class="form-control" value="{{ $company->name }}">
                   @foreach ($companys as $comp)
                   @if ($company->name==$comp->name)
                   <option value="{{ $comp->id }}" selected>{{$comp->name}}</option>
                   @else
                   <option value="{{ $comp->id }}">{{$comp->name}}</option>
                  @endif  
                   @endforeach
               </select>  
               </div> 
               </div>

                  <div class="form-group row">
                  <div class="col-sm-6 pull-right">
                      <button class="btn btn-success" type="submit"> update</button>
                      <a href="{{ route('CompCoordinator.index') }}" class="btn btn-default">Cancel</a>
                  </div>
                  </div>
      </form>
  
  <div class="col-sm-2"></div>
</div>
</div>
@endsection() 
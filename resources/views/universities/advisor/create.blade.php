 @extends('universityAdmin.app')

@section('content')
<section class="content-header">
    <h1>
      Advisors
    </h1>
{{-- <a href="{{ route('')}}"></a><button class="btn btn-primary"> View List</button> --}}
</section>

   <div class="content">
      @include('adminlte-templates::common.errors')
    <div class="box box-primary">
      <div class="box-body">

        <form method="post" action="{{ route('Advisor.store')}}">
            {{csrf_field()}}
            <div class="form-group row">
                <lable for = "first name" class = "col-sm-1 col-form-label"><h5>First Name:</h5></lable>
                <div class="col-sm-6">
                    <input type="text" name="first name" class="form-control" id="name" placeholder="first name" required>
              </div>
            </div>

            <div class="form-group row">
                <lable for = "last name" class = "col-sm-1 col-form-label"><h5>Last Name:</h5></lable>
                <div class="col-sm-6">
                    <input type="text" name="last name" class="form-control" id="name" placeholder="last name" required>
              </div>
            </div>
            <div class="form-group row">
                <lable for = "email" class = "col-sm-1 col-form-label">email</lable>
                <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" id="titleid" placeholder="email" required>
               </div>
            </div>

            <div class="form-group row">
                <lable for = "password" class = "col-sm-1 col-form-label">password</lable>
                <div class="col-sm-6">
                    <input type="password" name="password" class="form-control" id="titleid" placeholder="password" required>
                </div>
            </div>

            <div class="form-group row">
                <lable for = "phone" class = "col-sm-1 col-form-label">phone</lable>
                <div class="col-sm-6">
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="phone" required>
                </div>
            </div>

            <div class="form-group row">
            <lable for = "gender" class = "col-sm-1 col-form-label">gender</lable>
            <div class="col-sm-6">
                <select id="" class=" form-control" name = 'sex' required>
                    <option value="Male" id="male" type="radio" name="sex">Male</option>
                    <option value="Female" id="female" type="radio" name="sex">Female</option>
                </select>
            </div>
            </div>
            
            <!-- <div class="form-group row">
                <lable for = "phone" class = "col-sm-1 col-form-label">user type</lable>
                 <div class="col-sm-6">
                   <select name="role" type ="text" class="form-control" value="{{ old('role') }}">
                      @foreach($roles as $rol)
                        <option value="{{ $rol->id }}">{{$rol->name}}</option>
                    
                     @endforeach
                  </select> 
                </div>
            </div> -->
        
            <div class="form-group row">
                <lable for = "phone" class = "col-sm-1 col-form-label">university</lable>
                <div class="col-sm-6">
                <select name="university" id="name" type ="text" class="form-control" value="{{ old('university_id') }}">
                     @foreach ($universities as $uni)
                     <option value="{{ $uni->id }}">{{$uni->name}}</option>
                     @endforeach
                  </select> 
              </div>
            </div>

                <div class="form-group row">
                  <div class="col-sm-6 pull-right">
                    <button class="btn btn-success" type="submit"> Register</button>
                    <a href="{{ route('Advisor.index') }}" class="btn btn-default">Cancel</a>
                 </div>
               </div>
        </form>

    </div>
    <div class="col-sm-2"></div>
</div>
</div>
@endsection()
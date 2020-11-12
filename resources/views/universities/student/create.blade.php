@extends('universityAdmin.app')

@section('content')
<section class="content-header">
    <h1>
  Students
    </h1>
    
</section>

   <div class="content">
      @include('adminlte-templates::common.errors')
    <div class="box box-primary">
      <div class="box-body">

        <form method="post" action="{{ route('Student.store')}}">
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

            <!--    ---- student id ---- -->
            <div class="form-group row">
                <lable for = "student_id" class = "col-sm-1 col-form-label"><h5>student_id:</h5></lable>
                <div class="col-sm-6">
                    <input type="text" name="student_id" class="form-control" id="student_id" placeholder="student id" required>
              </div>
            </div>

            <div class="form-group row">
                <lable for = "email" class = "col-sm-1 col-form-label"><h5>Email:</h5></lable>
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
                <lable for = "phone" class = "col-sm-1 col-form-label"><h5>Phone:</h5></lable>
                <div class="col-sm-6">
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="phone" required>
                </div>
            </div>
              <!--    ----gender ---- -->
            <div class="form-group row">
            <lable for = "gender" class = "col-sm-1 col-form-label"><h5>Gender:</h5></lable>
            <div class="col-sm-6">
                <select id="" class=" form-control" name = 'sex' required>
                    <option value="Male" id="male" type="radio" name="sex">Male</option>
                    <option value="Female" id="female" type="radio" name="sex">Female</option>
                </select>
            </div>
            </div>

              <!--    ----role ---- -->
            {{-- <div class="form-group row">
                <lable for = "role" class = "col-sm-1 col-form-label"><h5>user type:</h5></lable>
                 <div class="col-sm-6">
                    <select name="role" type ="text" class="form-control" value="{{ old('role') }}">
                        @foreach($roles as $rol)
                        <option value="{{ $rol->id }}">{{$rol->name}}</option>
                        @endforeach
                    </select> 
                </div>
            </div> --}}

               <!--    ----university ---- -->
            <div class="form-group row">
                <lable for = "phone" class = "col-sm-1 col-form-label"><h5>university:</h5></lable>
                <div class="col-sm-6">
                <select name="university" id="name" type ="text" class="form-control" value="{{ old('university_id') }}">
                     @foreach ($universities as $uni)
                     <option value="{{ $uni->id }}">{{$uni->name}}</option>
                     @endforeach
                  </select> 
              </div>
            </div>

            <div class="form-group row">
                <lable for = "phone" class = "col-sm-1 col-form-label"><h5>departments:</h5></lable>
                <div class="col-sm-6">
                <select name="department" id="name" type ="text" class="form-control" value="{{ old('department_id') }}">
                     @foreach ($departments as $uni) 
                     <option value="{{ $uni->id }}">{{$uni->department_name}}</option>
                     @endforeach
                  </select> 
              </div>
            </div>


               <!--    ----semister ---- -->
            <div class="form-group row">
            <lable for = "semister" class = "col-sm-1 col-form-label"><h5>semister-term:</h5></lable>
            <div class="col-sm-6">
                <select id="" class=" form-control" name = 'semister' required>
                    <option value="first" id="one" type="radio" name="semister">First</option>
                    <option value="second" id="two" type="radio" name="semister">Second</option>
                </select>
            </div>
            </div>
            
            <div class="form-group row">
                <lable for = "year" class = "col-sm-1 col-form-label"><h5>Class Year:</h5></lable>
                <div class="col-sm-6">
                    <input type="text" name="year" class="form-control" id="year" placeholder="year" required>
                </div>
            </div>
            <div class="form-group row">
                <lable for = "grade" class = "col-sm-1 col-form-label"><h5>Grade:</h5></lable>
                <div class="col-sm-6">
                    <input type="float" name="grade" class="form-control" id="grade" placeholder="grade" required>
                </div>
            </div>
            
<!--    ----register ---- -->
                <div class="form-group row">
                  <div class="col-sm-6 pull-right">
                    <button class="btn btn-success" type="submit"> Register</button>
                    <a href="{{ route('Student.index') }}" class="btn btn-default">Cancel</a>
                 </div>
               </div>
        </form>

    </div>
    <div class="col-sm-2"></div>
</div>
</div>
@endsection()
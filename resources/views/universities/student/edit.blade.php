
@extends('universityAdmin.app')

@section('content')
<section class="content-header">
    <h1>
  Students
    </h1>
{{-- <a href="{{ route('')}}"></a><button class="btn btn-primary"> View List</button> --}}
</section>

   <div class="content">
      @include('adminlte-templates::common.errors')
    <div class="box box-primary">
      <div class="box-body">

        <form method="post" action="{{ route('Student.update', $students->id)}}" enctype="multipart/form-data">
           {{csrf_field()}}
            @method('PUT')
            <div class="form-group row">
                <lable for = "first name" class = "col-sm-1 col-form-label"><h5>First Name:</h5></lable>
                <div class="col-sm-6">
                    <input type="text" name="first name" class="form-control" value="{{$users->first_name}}"  id="name" placeholder="first name" required >
              </div>
            </div>

            <div class="form-group row">
                <lable for = "last name" class = "col-sm-1 col-form-label"><h5>Last Name:</h5></lable>
                <div class="col-sm-6">
                    <input type="text" name="last name" class="form-control" value="{{$users->last_name}}" id="name" placeholder="last name" required>
              </div>
            </div>

            <!--    ---- student id ---- -->
            <div class="form-group row">
                <lable for = "student_id" class = "col-sm-1 col-form-label"><h5>student_id:</h5></lable>
                <div class="col-sm-6">
                    <input type="text" name="student_id" class="form-control"value="{{$students->student_id}}" id="student_id" placeholder="student id" required>
              </div>
            </div>

            <div class="form-group row">
                <lable for = "email" class = "col-sm-1 col-form-label"><h5>Email:</h5></lable>
                <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" value="{{$users->email}}" id="titleid" placeholder="email" required>
               </div>
            </div>

            <div class="form-group row">
                <lable for = "phone" class = "col-sm-1 col-form-label"><h5>Phone:</h5></lable>
                <div class="col-sm-6">
                    <input type="text" name="phone" class="form-control" value="{{$users->phone}}" id="phone" placeholder="phone" required>
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

               <!--    ----university ---- -->
            <div class="form-group row">
                <lable for = "phone" class = "col-sm-1 col-form-label"><h5>university:</h5></lable>
                <div class="col-sm-6">
                <select name="university" id="name" type ="text" class="form-control" value="{{ old('university_id') }}">
                     @foreach ($universitys as $uni)
                     <option value="{{ $uni->id }}">{{$uni->name}}</option>
                     @endforeach
                  </select> 
              </div>
            </div>

            <div class="form-group row">
                <lable for = "phone" class = "col-sm-1 col-form-label"><h5>departments:</h5></lable>
                <div class="col-sm-6">
                <select name="department" id="name" type ="text" class="form-control" value="{{ old('department_id') }}">
                     @foreach ($department as $dep)
                     <option value="{{ $dep->id }}">{{$dep->department_name}}</option>
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
                    <input type="text" name="year" class="form-control" value="{{$students->class_year}}" id="year" placeholder="year" required>
                </div>
            </div>
            <div class="form-group row">
                <lable for = "grade" class = "col-sm-1 col-form-label"><h5>Grade:</h5></lable>
                <div class="col-sm-6">
                    <input type="number" name="grade" class="form-control" value="{{$students->grade}}"id="grade" placeholder="grade" required>
                </div>
            </div>
            
<!--    ----update---- -->
                <div class="form-group row">
                  <div class="col-sm-6 pull-right">
                    <button class="btn btn-success" type="submit"> update</button>
                    <a href="{{ route('Student.index') }}" class="btn btn-default">Cancel</a>
                 </div>
               </div>
        </form>

    </div>
    <div class="col-sm-2"></div>
</div>
</div>
@endsection()























<!-- 
<div class="form-group row">
                <lable for = "first name" class = "col-sm-1 col-form-label"><h5>First Name:</h5></lable>
                <div class="col-sm-6">
                    <input type="text" name="first name" class="form-control" value="{{$users->first_name}}" id="name" placeholder="first_name" required>
            </div></div>

            <div class="form-group row">
                <lable for = "last name" class = "col-sm-1 col-form-label"><h5>Last Name:</h5></lable>
                <div class="col-sm-6">
                    <input type="text" name="last name" class="form-control" value="{{$users->last_name}}" id="name" placeholder="last_name" required>
            </div></div> -->
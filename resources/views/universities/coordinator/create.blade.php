@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        coordinators
    </h1>
</section>
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
        <div class="box-body">
        <form method="post" action="{{ route('unicoordinator.store')}}">
            {{csrf_field()}}
            <div class="form-group row">
                <lable for = "name" class = "col-sm-1 col-form-label">name</lable>
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="user name">
            </div></div>



            <div class="form-group row">
                <lable for = "email" class = "col-sm-1 col-form-label">email</lable>
                <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" id="titleid" placeholder="email">
            </div></div>
            <div class="form-group row">
                <lable for = "password" class = "col-sm-1 col-form-label">password</lable>
                <div class="col-sm-6">
                    <input type="password" name="password" class="form-control" id="titleid" placeholder="password">
            </div></div>
            <div class="form-group row">
                <lable for = "phone" class = "col-sm-1 col-form-label">phone</lable>
                <div class="col-sm-6">
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="phone">
            </div></div>
            

            
            <div class="form-group row">
            <lable for = "gender" class = "col-sm-1 col-form-label">gender</lable>
            <div class="col-sm-6">
                <select id="" class=" form-control" name = 'sex' required>
                    <option value="Male" id="male" type="radio" name="sex">Male</option>
                    <option value="Female" id="female" type="radio" name="sex">Female</option>
                </select>
            </div>
            </div>


            
            <div class="form-group row">
                <lable for = "phone" class = "col-sm-1 col-form-label">user type</lable>
                <div class="col-sm-6">
                <select name="role" id="name" type ="text" class="form-control" value="{{ old('role') }}">
                @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{$role->name}}</option>
                    
                @endforeach
            </select> 
                </div></div>
        

                
            <div class="form-group row">
                <lable for = "phone" class = "col-sm-1 col-form-label">university</lable>
                <div class="col-sm-6">
                <select name="university" id="name" type ="text" class="form-control" value="{{ old('university_id') }}">
                    @foreach ($university as $uni)
                    <option value="{{ $uni->id }}">{{$uni->name}}</option>
                        
                    @endforeach
            </select> 
                </div></div>

                <div class="form-group row">
                    <div class="col-sm-6 pull-right">
                <button class="btn btn-success" type="submit"> Register</button>
            </div>
                </div>
        </form>

    </div>
    <div class="col-sm-2"></div>
</div>
</div>
@endsection()
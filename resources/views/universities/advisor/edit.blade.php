@extends('layouts.app')

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
      

        <form method="post" action="{{ route('Advisor.update', $advisors->id)}}" enctype="multipart/form-data">
            {{csrf_field()}}
            @method('PUT')

            <div class="form-group row">
                <lable for = "name" class = "col-sm-1 col-form-label">name</lable>
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" value="{{$users->name}}" id="name" placeholder="user name" required>
            </div></div>

            <div class="form-group row">
                <lable for = "email" class = "col-sm-1 col-form-label">email</lable>
                <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" id="titleid" value="{{$users->email}}" placeholder="email" required>
            </div></div>
            
            <div class="form-group row">
                <lable for = "phone" class = "col-sm-1 col-form-label">phone</lable>
                <div class="col-sm-6">
                    <input type="text" name="phone" class="form-control" id="phone" value="{{$users->phone}}"  placeholder="phone" required>
            </div></div>

            <div class="form-group row">
            <lable for = "gender" class = "col-sm-1 col-form-label">gender</lable>
            <div class="col-sm-6">
                <select id="" class=" form-control" name = 'sex'  required>
                    <!-- <option value="Male" id="male" type="radio" name="sex">Male</option>
                    <option value="Female" id="female" type="radio" name="sex">Female</option> -->
                    @if ($users->sex=="Male")
                    <option value="male" selected>Male</option>
                    <option value="female">Female</option>
                    @elseif($users->sex=="Female")
                    <option value="male">Male</option>
                    <option value="female" selected>Female</option>
                    @endif
              </select> </div> </div>





            <div class="form-group row">
                <lable for = "phone" class = "col-sm-1 col-form-label">university</lable>
                <div class="col-sm-6">

                   <select name="university" id="name" type ="text" class="form-control" value="{{ $university->name }}">
                     @foreach ($universitys as $uni)
                     @if ($university->name==$uni->name)
                     <option value="{{ $uni->id }}" selected>{{$uni->name}}</option>
                     @else
                     <option value="{{ $uni->id }}">{{$uni->name}}</option>
                    @endif  
                     @endforeach
                 </select>  
                 </div> 
                 </div>

                    <div class="form-group row">
                    <div class="col-sm-6 pull-right">
                        <button class="btn btn-success" type="submit"> update</button>
                        <a href="{{ route('Advisor.index') }}" class="btn btn-default">Cancel</a>
                    </div>
                    </div>
        </form>
    
    <div class="col-sm-2"></div>
</div>
</div>
@endsection()
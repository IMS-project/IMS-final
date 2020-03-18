!--
<div class="form-group col-sm-5">
    {!! Form::label('name', 'FullName:') !!}
    {!! Form::text('name',null, ['class' => 'form-control']) !!}
    </div>
    <br>
              <!-role selection-----------  --  
    <div class="form-group col-sm-5">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email',null, ['class' => 'form-control']) !!}
    </div>
    <br>
             <!- ---       phone ---------- --
    <div class="form-group col-sm-5">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone',null, ['class' => 'form-control']) !!}
    </div>
    <br>

                  <!- gender-----------  --   
        {!! Form::label('sex', 'Gender:') !!}
       <div class="col-md-1">
            <div><input id="female" type="radio"class="form-control" name="sex" value="Female" {{ (old('sex') == 'female') ? 'checked' : '' }}>Female</div><br>
            <div><input id="male" type="radio"class="form-control" name="sex" value="Male" {{ (old('sex') == 'male') ? 'checked' : '' }} >Male</div>
             @if ($errors->has('sex'))
            <span class="help-block"> <strong>{{ $errors->first('gender') }}</strong></span>
            @endif
       </div> 


                  <!- role selection menu-----------  -- 
    <div class="form-control col-md-5" >
                <select name="role" id="name" type ="text" class="form-control" value="{{ old('role') }}">
                @foreach ($role as $role)
                <option style = "margin-left 400px;" value="{{ $role->id }}">{{$role->name}}</option>
                    
                @endforeach
            </select> 
   
            <div class="form-control col-md-5">
                <select name="university" id="uni" type ="text" class="form-control">
                @foreach ($university as $uni)
                <option value="{{ $uni->id }}">{{$uni->name}}</option>
                    
                @endforeach
            </select>
            </div>
           <br>

              !-- password  -----------  -- 
                {!! Form::label('name', 'Password:') !!}
    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>

                     <!-- Register button----------  --  
            <div class="form-group col-sm-12">
           {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
             <a href="{{ route('UniCoordinator.index') }}" class="btn btn-default">cancel</a> 
    
           </div>          
           form uni-coor create file -->
         @extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <form method="post" action="{{ route('UniCoordinator.store')}}">
            {{csrf_field()}}
            <div class="form-control">
                <input type="text" value="username" name="name" class="form-contorl">
            </div>
            <div class="form-control">
                <input type="email" value="email" name="email" class="form-contorl">
            </div>
            <div class="form-control">
                <input type="password" value="password" name="password" class="form-contorl">
            </div>
            <div class="form-control"> 
                <input type="text" value="phone" name="phone" class="form-contorl">
            </div>
            <div class="form-control">
                <input type="text" value="geneder" name="sex" class="form-contorl">
            </div>
        
            <div class="form-control">
                <select name="role" id="name" type ="text" class="form-control" value="{{ old('role') }}">
                @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{$role->name}}</option>
                    
                @endforeach
            </select> 

            
            <div class="form-control">
                <select name="university" id="uni" type ="text" class="form-control">
                @foreach ($university as $uni)
                <option value="{{ $uni->id }}">{{$uni->name}}</option>
                    
                @endforeach
            </select>
            </div>
            
            <div class="form-control">
                <button class="btn btn-primary" type="submit"> Register</button>
            </div>
        
        </form>

    </div>
    <div class="col-sm-2"></div>
</div>
@endsection() -->
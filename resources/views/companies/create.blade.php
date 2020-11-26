@extends('superAdmin.app')

@section('content')
<section class="content-header">
    <h1>
 Company Information
    </h1>
{{-- <a href="{{ route('')}}"></a><button class="btn btn-primary"> View List</button> --}}
</section>

   <div class="content">
      @include('adminlte-templates::common.errors')
    <div class="box box-primary">
      <div class="box-body">
        <form method="post" action="{{ route('companies.store')}}">
            {{csrf_field()}}
            <div class="form-group row">
                <lable for = "phone" class = "col-sm-1 col-form-label"><h5>company name</h5></lable>
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="company name" required>
                </div>
            </div>
            <div class="form-group row">
                <lable for = "phone" class = "col-sm-1 col-form-label"><h5>company address</h5></lable>
                <div class="col-sm-6">
                    <input type="text" name="address" class="form-control"  placeholder="address" required>
                </div>
            </div>
    
            
            
            

            <div class="form-group row">
              <div class="col-sm-6 pull-right">
                <button class="btn btn-success disabled" type="submit" id="submitBtn"> Register</button>
                <a href="{{ route('companies.index') }}" class="btn btn-default">Cancel</a>
            </div>
            </div>
                
        </form>

    </div>
    <div class="col-sm-2"></div>
</div>
</div>

@endsection()
@extends('universityAdmin.app')

@section('content')
    <section class="content-header">
        <h4>
           companys information
        </h4>
</section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
                    <form method="post" action="{{ route('company.update', $company->id)}}" class="form-horizontal form-bordered" >
                            {{csrf_field()}}
                            @method('PUT')
                        <div class="form-group row">
                                <lable for = "phone" class = "col-sm-1 col-form-label"><h5>company name</h5></lable>
                                <div class="col-sm-6">
                                    <input type="text" name="name" class="form-control"  id="name" placeholder="company name" required value="{{$company->name}}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <lable for = "address" class = "col-sm-1 col-form-label"><h5>company address</h5></lable>
                                <div class="col-sm-6">
                                    <input type="text" name="address" class="form-control" id="address" placeholder="address" value="{{$company->address}}" required>
                                </div>
                            </div>

<!--    ----register ---- -->
          <div class="form-group row">
            <div class="col-sm-6 pull-right">
              <button class="btn btn-success" type="submit"> update</button>
              <a href="{{ route('company.index') }}" class="btn btn-default">Cancel</a>
          </div>
        </div>
      </form>
                        </div></div></div>
  </div>
  <div class="col-sm-2"></div>
</div>
</div>        
   
@endsection
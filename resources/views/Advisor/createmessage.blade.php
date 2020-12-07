@extends('Advisor.app')

@section('content')
    <section class="content-header">
        <h1>
        Enter message
        </h1>
    </section>

      <div class="content">
        @include('adminlte-templates::common.errors')
         <div class="box box-primary">
            <div class="box-body">

        <form method="post" action="{{ route('sendmessage.store')}}" class="form-horizontal form-bordered">
          
          <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    <!-- Department Name Field -->
                  <input type="hidden" name="id" id="" value="{{$id}}">
              <div class="form-group row">
                  <lable for = "name" class = "col-sm-1 col-form-label">Enter message:</lable>
                   <div class="col-sm-6">
                   <textarea name="message" id="message" cols="40" rows="4"></textarea>
                   </div>
                </div>       
            </div>
                <!-- User Id Field -->

                <div class="form-group row">
                  <div class="col-sm-6 pull-right">
                    <button class="btn btn-success" type="submit"> submit</button>
                    <a href="{{ route('show') }}" class="btn btn-primary">Back</a>
                  </div>
                </div>

              </form>
            </div>
        
        <div class="col-sm-2"></div>
     </div>
@endsection

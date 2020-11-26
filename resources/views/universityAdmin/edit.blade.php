@extends('universityAdmin.app')

@section('content')
    <section class="content-header">
        <h1>
           companys information
        </h1>
</section>


   
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">

           <div class="row">
                   {!! Form::model($company, ['route' => ['company.update', $company->id], 'method' => 'patch']) !!}

                        {{-- @include('companies.fields') --}}
                        @section('content')
                    <div class="content">
                        @include('adminlte-templates::common.errors')
                    <div class="box box-primary">
                        <div class="box-body">

                    <form method="post" action="{{ route('company.update', $company->id)}}">
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


                        
                
                        <!--    ---- student id ---- -->
                        <div class="form-group row">
                            <lable for = "student_id" class = "col-sm-1 col-form-label"><h5>offer capacity:</h5></lable>
                            <div class="col-sm-6">
                        <input type="number" name="offer_capacity" class="form-control" id="student_id" 
                                            placeholder="offer capacity" value="{{$company->offer_capacity}}" required>
                            </div>
                        </div>
                <!-- 
          <div class="form-group row">
              <lable for = "grade" class = "col-sm-1 col-form-label"><h5>minimum grade</h5></lable>
              <div class="col-sm-6">
                  <input type="number" name="grade" class="form-control" id="student_id" placeholder="grade" required value="{{$company->grade}}">
              </div>
          </div>
    
              
          <div class="form-group row">
            <lable for = "skills" class = "col-sm-1 col-form-label"><h5>other required skils</h5></lable>
            <div class="col-sm-6">
                <input type="text" name="skills" class="form-control" id="student_id" placeholder="other skills" required>
            </div>
        </div>
          
           -->
<!--    ----register ---- -->
          <div class="form-group row">
            <div class="col-sm-6 pull-right">
              <button class="btn btn-success" type="submit"> update</button>
              <a href="{{ route('company.index') }}" class="btn btn-default">Cancel</a>
          </div>
          </div>
              
      

      </form>

  </div>
  <div class="col-sm-2"></div>
</div>
</div>
@endsection()

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
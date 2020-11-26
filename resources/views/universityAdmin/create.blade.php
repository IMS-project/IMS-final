@extends('universityAdmin.app')

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
        <form method="post" action="{{ route('company.store')}}">
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
                    <input type="text" name="address" class="form-control" id="address" placeholder="address" required>
                </div>
            </div>

            
    
            <div class="form-group row">
                <lable for = "student_id" class = "col-sm-1 col-form-label"><h5>offer capacity:</h5></lable>
                <div class="col-sm-6">
                    <input type="number" name="offer_capacity" class="form-control" id="student_id" placeholder="offer capacity" required>
              </div>
            </div>
            

            <div class="form-group row">
                <lable for = "phone" class = "col-sm-1 col-form-label"><h5>minimum grade</h5></lable>
                <div class="col-sm-6">
                    <input type="float" name="mini_grade" class="form-control" id="grade" placeholder="grade" required>
                </div>
            </div>
      
                
            <div class="form-group row">
              <lable for = "phone" class = "col-sm-1 col-form-label"><h5>other required skils</h5></lable>
              <div class="col-sm-6">
                  <input type="text" name="other_skills" class="form-control" id="skills" placeholder="other skills" required>
              </div>
          </div>
            
            

            <div class="form-group row">
              <div class="col-sm-6 pull-right">
                <button class="btn btn-success" type="submit" id="submitBtn"> Register</button>
                <a href="{{ route('company.index') }}" class="btn btn-default">Cancel</a>
            </div>
            </div>
                
        </form>

    </div>
    <div class="col-sm-2"></div>
</div>
</div>
<script>
    const grade = document.getElementById('grade');
    const submitBtn = document.getElementById('submitBtn');
    grade.addEventListener('input', (event) => {
        if(grade.value > 4){
            grade.value = null;
            submitBtn.classList.add('disabled');
        }
        else {
            submitBtn.classList.remove('disabled');
        }
    })
</script>
@endsection()
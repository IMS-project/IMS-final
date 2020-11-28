@extends('companyAdmin.app')

@section('content')
    <section class="content-header">
        <h1>
          Departments
        </h1>
    </section>

      <div class="content">
        @include('adminlte-templates::common.errors')
         <div class="box box-primary">
            <div class="box-body">
              <div class="row" style="padding: 25px">

        <form method="post" action="{{ route('companydepartments.store')}}">
              {{csrf_field()}}
                    <!-- Department Name Field -->
              <div class="form-group row">
                  <lable for = "name" class = "col-sm-1 col-form-label">Department Name:</lable>
                   <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="department name" required>
                   </div>
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
                  <input type="float" name="mini_grade" class="form-control" value="2" id="grade">
                  
              </div>
          </div>
    
              
          <div class="form-group row">
            <lable for = "phone" class = "col-sm-1 col-form-label"><h5>other required skils</h5></lable>
            <div class="col-sm-6">
                <input type="text" name="other_skills" class="form-control" id="skills" placeholder="other skills" required>
            </div>
        </div>
                <!-- User Id Field -->

                <div class="form-group row">
                  <div class="col-sm-6 pull-right">
                    <button class="btn btn-success" type="submit" id="submitBtn"> Save</button>
                    <a href="{{ route('companydepartments.index') }}" class="btn btn-default">Cancel</a>
                  </div>
                </div>

              </form>
            </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
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
@endsection

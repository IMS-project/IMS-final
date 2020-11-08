
   <div class="content">
    @include('adminlte-templates::common.errors')
  <div class="box box-primary">
    <div class="box-body">

      
          <div class="form-group row">
            <lable for = "phone" class = "col-sm-1 col-form-label"><h5>work area</h5></lable>
            <div class="col-sm-6">
                <input type="text" name="work_area" class="form-control" id="grade" placeholder="work area" required>
            </div>
        </div>
  
          <!--    ---- student id ---- -->
          <div class="form-group row">
              <lable for = "student_id" class = "col-sm-1 col-form-label"><h5>offer capacity:</h5></lable>
              <div class="col-sm-6">
                  <input type="number" name="offer_capacity" class="form-control" id="student_id" placeholder="offer capacity" required>
            </div>
          </div>

         

          

          <div class="form-group row">
              <lable for = "phone" class = "col-sm-1 col-form-label"><h5>minimum grade</h5></lable>
              <div class="col-sm-6">
                  <input type="number" name="grade" class="form-control" id="grade" placeholder="grade" required>
              </div>
          </div>
    
              
          <div class="form-group row">
            <lable for = "phone" class = "col-sm-1 col-form-label"><h5>other skils</h5></lable>
            <div class="col-sm-6">
                <input type="text" name="skills" class="form-control" id="skills" placeholder="other skills" required>
            </div>
        </div>
          
          
<!--    ----register ---- -->
          <div class="form-group row">
            <div class="col-sm-6 pull-right">
              <button class="btn btn-success" type="submit"> Register</button>
              <a href="{{ route('Internship.index') }}" class="btn btn-default">Cancel</a>
          </div>
          </div>
              
      </form>

  </div>
  <div class="col-sm-2"></div>
</div>
</div>
@endsection()
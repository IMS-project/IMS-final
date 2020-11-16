
<!-- <div class="form-group">
    {!! Form::label('name', 'name:') !!}
    <p>{{ $university->name }}</p>
</div>

<div class="form-group">
    {!! Form::label('address', 'address:') !!}
    <p>{{ $university->address }}</p>
</div> -->
     <table>
      <thead>
       <tr>
        <th>Name</th>
        <th>Address</th>
      </tr>
     </thead>
     <tbody>
     <tr>
     <td>{{ $university->name }}</td>
     <td>{{ $university->address }}</td>
     </tr>
     </tbody>
    </table>

<!-- 
    <hr>
       <h4 class="text-primary text-center">List of departments</h4>
       <div class="row">
       <div class="col-sm-4"></div>
       <div class="col-sm-4">

       @foreach($university->department as $r)
       <div class="form-control">
           <p>{{$r->department_name}}</p></div>
       @endforeach

       </div>
       </div>
       
       <hr>
       <h4 class="text-primary text-center">List of advisors</h4>
       <div class="row">
       <div class="col-sm-4"></div>
       <div class="col-sm-4">

       @foreach($university->advisor as $r)
       <ul>
           <p>{{$r->advisor_name}}</p>
          <div><p>{{$r->advisor_email}}</p></div>
          <di><p>{{$r->advisor_phone}}</p></div> 
       </ul>
       @endforeach
       </div>
       </div>
        -->
<table class="table table-bordered" id="companies-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th></th>
        </tr>
    </thead>
<tbody>

    <tr>
        <td>{{ $university->name }}</td>
        <td>{{ $university->address }}</td>
        <td></td>
    </tr>
    
</tbody>

</table>
<table class="table table-bordered" id="companies-table">
    <thead>

        <tr>
            <th>List of  deparments</th>
        </tr>
    </thead>
    <tbody>
        <tr>
     @foreach($university->department as $r)
     <td>{{$r->department_name}}</td>
           
       @endforeach     
        </tr>
    </tbody>
</table>
       
       <div class="row">
       <div class="col-sm-4"></div>
       <div class="col-sm-4">
       </div>
       </div>

       <div class="row">
       <div class="col-sm-4"></div>
       <div class="col-sm-4">  
       </div>
       </div>
       

       

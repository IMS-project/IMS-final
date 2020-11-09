<div class="table-responsive">
    <table class="table" id="companies-table">
        <thead>
            <tr> <th>SN</th>
                <th>applicants name</th>
                 <th>university</th>
                <th colspan="3">Action</th> 
                
            </tr>
        </thead>

        <tbody>
            
        @foreach($applicants as $app)
        
         <tr>
            <td>{{$app->id}}</td>
                <td>{{$app->student->user->first_name}}</td>
                <td>{{$app->student->university->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

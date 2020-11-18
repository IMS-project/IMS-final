<div class="table-responsive">
    <table class="table" id="companies-table">
        <thead>
            <tr>
                <th>SN</th>
                <th>Name of Company</th>               
            </tr>
        </thead>
        <tbody>    
        @foreach($companies as $company) 
         <tr>
             <td>{{$company->id}}</td>
                <td><a href="{{ route('Applicants.show', [$company->id]) }}">{{ $company->name }}</a></td>
                
                @endforeach             
            </tr>
        
        </tbody>
    </table>
</div>

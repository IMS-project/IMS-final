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
                
                 {{-- <td>{{ $company->address }}</td>
                 <td> 
                    {!! Form::open(['route' => ['companies.destroy',$company->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('companies.show', [$company->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('companies.edit', [$company->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
              </td>  --}}
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

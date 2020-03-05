<div class="table-responsive">
    <table class="table" id="companyCoordinators-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Company Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($companyCoordinators as $companyCoordinators)
            <tr>
                <td>{{ $companyCoordinators->user_id }}</td>
            <td>{{ $companyCoordinators->company_id }}</td>
                <td>
                    {!! Form::open(['route' => ['companyCoordinators.destroy', $companyCoordinators->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('companyCoordinators.show', [$companyCoordinators->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('companyCoordinators.edit', [$companyCoordinators->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

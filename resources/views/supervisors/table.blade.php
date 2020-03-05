<div class="table-responsive">
    <table class="table" id="supervisors-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Company Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($supervisors as $supervisors)
            <tr>
                <td>{{ $supervisors->user_id }}</td>
            <td>{{ $supervisors->company_id }}</td>
                <td>
                    {!! Form::open(['route' => ['supervisors.destroy', $supervisors->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('supervisors.show', [$supervisors->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('supervisors.edit', [$supervisors->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

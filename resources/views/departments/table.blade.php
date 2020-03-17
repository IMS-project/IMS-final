<div class="table-responsive">
    <table class="table" id="departments-table">
        <thead>
            <tr>
                <th>Department Name</th>
        <th>University Id</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($departments as $departments)
            <tr>
                <td>{{ $departments->department_name }}</td>
            <td>{{ $departments->university_id }}</td>
                <td>
                    {!! Form::open(['route' => ['departments.destroy', $departments->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('departments.show', [$departments->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('departments.edit', [$departments->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

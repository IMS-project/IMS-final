<div class="table-responsive">
    <table class="table" id="universities-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th colspan="3">Action</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach($departments as $dep)
            <tr>
                <td>{{ $dep->name }}</td>
            <td>{{ $dep->address }}</td>
                <td>
                    {!! Form::open(['route' => ['departments.destroy', $dep->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('departments.show', [$dep->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('departments.edit', [$dep->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

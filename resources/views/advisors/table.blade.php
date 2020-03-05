<div class="table-responsive">
    <table class="table" id="advisors-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>University Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($advisors as $advisor)
            <tr>
                <td>{{ $advisor->user_id }}</td>
            <td>{{ $advisor->university_id }}</td>
                <td>
                    {!! Form::open(['route' => ['advisors.destroy', $advisor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('advisors.show', [$advisor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('advisors.edit', [$advisor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

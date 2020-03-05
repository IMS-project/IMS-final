<div class="table-responsive">
    <table class="table" id="reports-table">
        <thead>
            <tr>
                <th>Student Id</th>
        <th>Advisor Id</th>
        <th>Supervisor Id</th>
        <th>Text</th>
        <th>Evaluation</th>
        <th>Attachment</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reports as $reports)
            <tr>
                <td>{{ $reports->student_id }}</td>
            <td>{{ $reports->advisor_id }}</td>
            <td>{{ $reports->supervisor_id }}</td>
            <td>{{ $reports->text }}</td>
            <td>{{ $reports->evaluation }}</td>
            <td>{{ $reports->attachment }}</td>
                <td>
                    {!! Form::open(['route' => ['reports.destroy', $reports->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('reports.show', [$reports->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('reports.edit', [$reports->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

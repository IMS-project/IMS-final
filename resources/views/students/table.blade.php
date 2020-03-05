<div class="table-responsive">
    <table class="table" id="students-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>University Id</th>
        <th>Company Id</th>
        <th>Advisor Id</th>
        <th>Supervisor Id</th>
        <th>Year</th>
        <th>Department Id</th>
        <th>Grade</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($students as $students)
            <tr>
                <td>{{ $students->user_id }}</td>
            <td>{{ $students->university_id }}</td>
            <td>{{ $students->company_id }}</td>
            <td>{{ $students->advisor_id }}</td>
            <td>{{ $students->supervisor_id }}</td>
            <td>{{ $students->year }}</td>
            <td>{{ $students->department_id }}</td>
            <td>{{ $students->grade }}</td>
                <td>
                    {!! Form::open(['route' => ['students.destroy', $students->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('students.show', [$students->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('students.edit', [$students->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

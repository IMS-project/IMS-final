<div class="table-responsive">
    <table class="table" id="placements-table">
        <thead>
            <tr>
                <th>Student Id</th>
        <th>Company Id</th>
        <th>University Id</th>
        <th>Work Area</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Number Of Days</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($placements as $placements)
            <tr>
                <td>{{ $placements->student_id }}</td>
            <td>{{ $placements->company_id }}</td>
            <td>{{ $placements->university_id }}</td>
            <td>{{ $placements->work_area }}</td>
            <td>{{ $placements->start_date }}</td>
            <td>{{ $placements->end_date }}</td>
            <td>{{ $placements->number_of_days }}</td>
                <td>
                    {!! Form::open(['route' => ['placements.destroy', $placements->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('placements.show', [$placements->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('placements.edit', [$placements->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

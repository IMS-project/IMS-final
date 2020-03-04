<div class="table-responsive">
    <table class="table" id="companies-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Address</th>
        <th>Offer Capacity</th>
        <th>Field Of Study</th>
        <th>Min Grade</th>
        <th>Student Benefit</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($companies as $companies)
            <tr>
                <td>{{ $companies->name }}</td>
            <td>{{ $companies->address }}</td>
            <td>{{ $companies->offer_capacity }}</td>
            <td>{{ $companies->field_of_study }}</td>
            <td>{{ $companies->min_grade }}</td>
            <td>{{ $companies->student_benefit }}</td>
                <td>
                    {!! Form::open(['route' => ['companies.destroy', $companies->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('companies.show', [$companies->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('companies.edit', [$companies->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

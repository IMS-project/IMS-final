<div class="table-responsive">
    <table class="table" id="universities-table">
        <thead>
            <h5 class="font-italic">
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Address</th>
                <th colspan="3">Action</th>
                
            </tr>
            </h5>
        </thead>

        <tbody>
        @foreach($universities as $university)
            <tr>
                <td>{{ $university->id}}</td>
                <td>{{ $university->name }}</td>
            <td>{{ $university->address }}</td>
                <td>
                    {!! Form::open(['route' => ['universities.destroy', $university->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('universities.show', [$university->id]) }}" class='btn btn-primaryt btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('universities.edit', [$university->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
              </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

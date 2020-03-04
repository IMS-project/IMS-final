<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Sex</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Email Verified At</th>
        <th>Password</th>
        <th>Role</th>
        <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $users)
            <tr>
                <td>{{ $users->first_name }}</td>
            <td>{{ $users->last_name }}</td>
            <td>{{ $users->address }}</td>
            <td>{{ $users->sex }}</td>
            <td>{{ $users->phone }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->email_verified_at }}</td>
            <td>{{ $users->password }}</td>
            <td>{{ $users->role }}</td>
            <td>{{ $users->remember_token }}</td>
                <td>
                    {!! Form::open(['route' => ['users.destroy', $users->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$users->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('users.edit', [$users->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

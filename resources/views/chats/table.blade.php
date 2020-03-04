<div class="table-responsive">
    <table class="table" id="chats-table">
        <thead>
            <tr>
                <th>Sender Id</th>
        <th>Reciever Id</th>
        <th>Body</th>
        <th>Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($chats as $chats)
            <tr>
                <td>{{ $chats->sender_id }}</td>
            <td>{{ $chats->reciever_id }}</td>
            <td>{{ $chats->body }}</td>
            <td>{{ $chats->date }}</td>
                <td>
                    {!! Form::open(['route' => ['chats.destroy', $chats->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('chats.show', [$chats->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('chats.edit', [$chats->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

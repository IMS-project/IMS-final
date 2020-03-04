<!-- Sender Id Field -->
<div class="form-group">
    {!! Form::label('sender_id', 'Sender Id:') !!}
    <p>{{ $chats->sender_id }}</p>
</div>

<!-- Reciever Id Field -->
<div class="form-group">
    {!! Form::label('reciever_id', 'Reciever Id:') !!}
    <p>{{ $chats->reciever_id }}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{{ $chats->body }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $chats->date }}</p>
</div>


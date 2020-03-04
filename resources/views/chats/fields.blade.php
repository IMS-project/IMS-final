<!-- Sender Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sender_id', 'Sender Id:') !!}
    {!! Form::number('sender_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Reciever Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reciever_id', 'Reciever Id:') !!}
    {!! Form::number('reciever_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('chats.index') }}" class="btn btn-default">Cancel</a>
</div>

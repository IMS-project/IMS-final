

<!--name field-->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
@include('universities.coordinator.create')

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Add', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('universities.index') }}" class="btn btn-default">Cancel</a>
</div>

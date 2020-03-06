<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
 <i class="fa fa-plus-circle">Add New</i>
</button>
<!--<a  data-toggle="modal" data-target="#myModal " class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('roles.create') }}"><i class="fa fa-plus-circle">Add New</i></a>
-->    
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Roles</h4>
      </div>
      <div class="modal-body">




<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->

<!-- Permission Field -->


<!-- Submit Field -->
</div>
<div class="modal-footer">
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('roles.index') }}" class="btn btn-default">Cancel</a>
</div>
</div>

  

</div>
</div>
</div>
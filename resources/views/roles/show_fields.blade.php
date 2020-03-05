<div class="modal fade fade-left" id="role-add-modal" tabindex="-1" role="dialog" arial-labelledby ="exampleModalLabel">
    <div class="modal-dailog modal-notify modal-ms  modal-right modal-success" role="document" >
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLablel"><i class="fa fa-registered" aria-hidden="true">Roles</i></h5>
        <button type="button" class="close" data-dismiss ="modal" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>

    </div>
<div class="body">

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $roles->name }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $roles->slug }}</p>
</div>

<!-- Permission Field -->
<div class="form-group">
    {!! Form::label('permission', 'Permission:') !!}
    <p>{{ $roles->permission }}</p>
</div>


</div>

</div>
    </div>

</div>





@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Roles
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($roles, ['route' => ['roles.update', $roles->id], 'method' => 'patch']) !!}

                        <!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >-->
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Edit</h4>
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
                              {!! Form::submit('Save changes', ['class' => 'btn btn-primary']) !!}
                              <a href="{{ route('roles.index') }}" class="btn btn-default">Cancel</a>
                          </div>
                          </div>
                          
                            
                          
                          
                          </div>
                          </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
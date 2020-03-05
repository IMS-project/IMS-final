@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Supervisors
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($supervisors, ['route' => ['supervisors.update', $supervisors->id], 'method' => 'patch']) !!}

                        @include('supervisors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
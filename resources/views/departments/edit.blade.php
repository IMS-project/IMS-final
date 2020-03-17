@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Departments
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($departments, ['route' => ['departments.update', $departments->id], 'method' => 'patch']) !!}

                        @include('departments.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
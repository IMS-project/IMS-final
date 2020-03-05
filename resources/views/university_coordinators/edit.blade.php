@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            University Coordinators
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($universityCoordinators, ['route' => ['universityCoordinators.update', $universityCoordinators->id], 'method' => 'patch']) !!}

                        @include('university_coordinators.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
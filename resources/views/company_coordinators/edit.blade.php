@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Company Coordinators
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($companyCoordinators, ['route' => ['companyCoordinators.update', $companyCoordinators->id], 'method' => 'patch']) !!}

                        @include('company_coordinators.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
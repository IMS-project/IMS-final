@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Reports
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($reports, ['route' => ['reports.update', $reports->id], 'method' => 'patch']) !!}

                        @include('reports.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
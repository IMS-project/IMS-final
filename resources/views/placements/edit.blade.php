@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Placements
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($placements, ['route' => ['placements.update', $placements->id], 'method' => 'patch']) !!}

                        @include('placements.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
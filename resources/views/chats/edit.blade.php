@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Chats
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($chats, ['route' => ['chats.update', $chats->id], 'method' => 'patch']) !!}

                        @include('chats.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
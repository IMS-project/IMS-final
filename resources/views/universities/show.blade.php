@extends('SuperAdmin.app')

@section('content')
    <section class="content-header"> <h4>  University information </h4></section>
 <div class="content">
     <div class="box box-primary">
         <div class="box-body">
            <div class="row" style="padding-left: 20px">

                @include('universities.show_fields')
            </div></div>
     </div>
                <a href="{{ route('universities.index') }}" class="btn btn-primary">Back</a>
             </div>
            </div>
        </div>
    </div>
@endsection

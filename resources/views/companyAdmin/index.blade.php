@extends('companyAdmin.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Applicants information</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table" id="companies-table">
                        <thead>
                            <tr> <th>SN</th>
                                <th>applicants name</th>
                                 <th>university</th>
                                 {{-- <th>company</th> --}}
                                <th colspan="3">Action</th> 
                                
                            </tr>
                        </thead>
                
                        <tbody>
                            
                        @foreach($applicants as $app)
                        
                         <tr>
                            <td>{{$app->id}}</td>
                                <td>{{$app->student->user->first_name}}</td>
                                <td>{{$app->student->university->name}}</td>
                                {{-- <td>{{$app->company->name}}</td> --}}
                                <td>
                                    {!! Form::open(['route' => ['UniCoordinator.destroy', $app ?? ''->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>
                                        <a href="{{ route('applicants.show',$app ?? ''->id) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i>
                                        </i></a>
                                        <a href="{{ route('applicants.show',$app->id) }}" class='btn btn-default btn-xs'><i class="fa fa-check" aria-hidden="true"></i></a>
                                        
                                        <a href="{{ route('Student.edit', $app ?? ''->id) }}" class='btn btn-default btn-xs'><i class="fa fa-ban" aria-hidden="false"></i>
                                        </i></a>
                                        {{-- {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection


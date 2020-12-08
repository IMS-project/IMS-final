@extends('studentpage.app')

@section('content')
    <section class="content-header">
        <h4 class="pull-left">Internship offer companies</h4>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    {{-- @include('Applicants.table') --}}
                    <div class="table-responsive">
                        <table class="table table-bordered" id="companies-table">
                            <thead>
                                <tr>
                                    <th>From</th>
                                     
                                    <th>Body</th>   
                                </tr>
                            </thead>
                    
                            <tbody>
                                
                            @foreach($messages as $message)
                             <tr>
                                 
                                 <td>{{$users[$message->sender]}}</td>
                                
                              <td><a href="">{{$message->body}}</a></td>
                          
                                    @endforeach
                                    
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>
                    
                    
            </div>
        </div>
    </div>
@endsection


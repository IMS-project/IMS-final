@extends('studentpage.app')
@section('content')
    <section class="content-header">
        <h4 class="pull-left">Student Advisor</h4>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="companies-table">
                            <thead>
                                <tr>
                                    
                                    <th>Name</th>   
                                    <th>contact</th>   
                                    
                                </tr>
                            </thead>
                    
                            <tbody>
                                
                               <tr>
                                   <td> {{$students->placement->assign->advisor->user->first_name}} {{$students->placement->assign->advisor->user->last_name}}</td>
                               </tr>           
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>
                    
                    
            </div>
        </div>
    </div>
@endsection


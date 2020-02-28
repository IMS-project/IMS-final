@extends('layouts.app')
@section('content')
<style>
        .border {
          display: inline-block;
          width: 70px;
          height: 70px;
          margin: 6px;
        }
        </style>
<div class="row">
    {{-- left side bar --}}
    <div class="col-2 sidenav" >
    
    
        <div>
            <ul class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">list item</a>
                <a href="#" class="list-group-item list-group-item-action">list item</a>
                
            </ul>
        </div><hr>

        <div style="padding: 10px; margin-top: 10px; margin-bottom: 10px;">
           some thing important here.</a><br>
        </div><hr>

    </div>

    {{-- center --}}
    <div class="col-8 border">
        <div class="row" style="margin-top: 10px; margin-bottom: 10px">
            <div class="col-9">
                <h4>All internship offers</h4>
            </div>
            <div class="col-3">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Select Category
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">one</a></li>
                        <li><a href="#">two</a></li>
                        <li><a href="#"> three</a></li>
                    </ul>
                </div>
            </div>
        </div><hr>

        <div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-8">
                            some thing important here
                        </div>
                        <div class="col-1">
                            
                        </div>
                        <div class="col-1">
                          
                    </div>
                </li>
                <li class="list-group-item bg-light">
                    <div class="row">
    
                </li>
                <li class="list-group-item">
                    <div class="row">
                        
                            some thng here
                    </div>
                </li>
                <li class="list-group-item bg-light">
                    <div class="row">
                        <div class="col-8">
                            
                        </div>
                        <div class="col-1">
                           
                    </div>
                </li>
                <li class="list-group-item">
                     <div class="row">
                        <div class="col-8">
                            some thing important here
                        </div>
                        </div>
                </li>

            </ul>
        </div>
    </div>

    {{-- right side bar --}}
    <div class="col-2" style="background: #d1d1e0">
        <div class="border border-3 border-right-0 border-top-0 border-bottom-0 border-info" style="margin-bottom: 10px; margin-top: 10px;">
            some thing important here
        </div>
        <div class="border border-3 border-right-0 border-top-0 border-bottom-0 border-warning" style="margin-bottom: 10px;">
            
        </div>

       
        <div class="border-0" style="margin-top: 10px">
            
        </div>

        {{-- /////////////////////////hot qoestions --}}
        <div class="border-0" style="margin-top: 10px">
           
        </div>

    </div>
</div>
@endsection

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Industrial | Internship</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect. -->
        <link rel="stylesheet" href="{{asset('dist/css/skins/skin-blue.min.css')}}">
      
        
        <!-- Google Font -->
        <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
      </head>


<body class="skin-blue sidebar-mini">
@if (!Auth::guest())
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <a href="#" class="logo" >
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>Inter</b>ships</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Intern</b>ships</span>
              </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span> 
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="{{asset('images/a.jpg')}}"
                                     class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{{ Auth::user()->first_name }}</span>
                            </a>
                            
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="{{asset('images/a.jpg')}}"
                                    class="user-image" alt="User Image"/>
                                    <p>
                                        {{ Auth::user()->first_name }}
                                        <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>
                                            Sign out
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar" id="sidebar-wrapper">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
        
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    
                    <div class="pull-left info">
                        @if (Auth::guest())
                        <p>guest</p>
                
                        @endif
        
                    </div>
                </div>
        
                <!-- search form (Optional) -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
                  <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat" ><i class="fa fa-search"></i>
                    </button>
                  </span>
                    </div>
                </form>
                <!-- Sidebar Menu -->
        
                <ul class="sidebar-menu" data-widget="tree">
                
                <li class="{{ Request::is('offer_company*') ? 'active' : '' }}">
                    <a href="{{ route('offer_company.index') }}"><i class="fa fa-industry" aria-hidden="true"></i><span>Company</span></a>
                    </li>
                    <li class="{{ Request::is('Requests*') ? 'active' : '' }}">
                        <a href="{{ route('Requests.index') }}"><i class="fa fa-question-circle" aria-hidden="true"></i>
                            <span>Request</span></a>
                        </li>
                        <li class="{{ Request::is('acceptance*') ? 'active' : '' }}">
                            <a href="{{ route('acceptance.index') }}"><i class="fa fa-users"></i><span>Placement</span></a>
                            </li>
                            <li class="{{ Request::is('studentAdvisor*') ? 'active' : '' }}">
                                <a href="{{ route('studentadvisor.index') }}"><i class="fa fa-user"></i><span>Advisor</span></a>
                                </li>
                                <li class="{{ Request::is('studentsupervisor*') ? 'active' : '' }}">
                                    <a href="{{ route('studentsupervisor.index') }}"><i class="fa fa-user"></i><span>Supervisor</span></a>
                                    </li>
                                    <li class="{{ Request::is('studentsupervisor*') ? 'active' : '' }}">
                                        <a href="{{ route('studentsupervisor.index') }}"><i class="fa fa-file" aria-hidden="true"></i><span>Report</span></a>
                                        </li>
                                        <li class="{{ Request::is('inboxdmessage*') ? 'active' : '' }}">
                                            <a href="{{ route('inboxdmessage.index') }}"><i class="fa fa-inbox"></i> <span>Messages</span></a>
                                            </li>
                
                </ul>
    
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2020 <a href="#">Teams</a>.</strong> All rights reserved.
        </footer>

    </div>
@else
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                Internship
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
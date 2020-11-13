<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ims</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.7 
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!---
<link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">

<link rel="stylesheet" href="fontawesome/css/fontawesome.css">
<link rel="stylesheet" href="fontawesome/css/all.css">-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="{{asset('new/fontawesome-free/css/all.min.css')}}">
    @yield('css')
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
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
                    {{-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span>menu</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu"> 
                <li class="{{ Request::is('universities*') ? 'active' : '' }}">
                <a href="{{ route('universities.index') }}"><i class="fas fa-graduation-cap"></i><span>university</span></a>
                </li> --}}
        
                <!-- {{-- <li class="{{ Request::is('universities*') ? 'active' : '' }}">
                <a href="{{ route('universities.index') }}"><i class="fa fa-edit"></i><span>university</span></a>
                </li> --}} -->
                <li>
                </li>
                {{-- <li class="{{ Request::is('universities*') ? 'active' : '' }}">
                    <a href="{{ route('universities.index') }}"><i class="fa fa-graduation-cap"></i><span>universitys</span></a>
                </li> --}}
                <li class="{{ Request::is('Student*') ? 'active' : '' }}">
                    <a href="{{ route('Student.index') }}"><i class="fa fa-user-circle" aria-hidden="true"></i>
                        <span>Student</span></a>
                    </li>
                <li class="{{ Request::is('departments*') ? 'active' : '' }}">
                <a href= "{{route('departments.index')}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </i><span>department</span></a>
                </li>
                <li class="{{ Request::is('companies*') ? 'active' : '' }}">
                    <a href="{{ route('company.index') }}"><i class="fa fa-industry" aria-hidden="true"></i>

                        <span>company</span></a>
                    </li>
                    {{-- <li class="{{ Request::is('UniCoordinator*') ? 'active' : '' }}">
                        <a href="{{ route('UniCoordinator.index') }}"><i class="fa fa-edit"></i><span>Uni_coordinators</span></a>
                        </li> --}}
                        <li class="{{ Request::is('Advisor*') ? 'active' : '' }}">
                            <a href="{{ route('Advisor.index') }}"><i class="fa fa-user" aria-hidden="true"></i>
                                <span>Advisor</span></a>
                            </li>
                {{-- <li class="{{ Request::is('UniCoordinator*') ? 'active' : '' }}">
                <a href="{{ route('UniCoordinator.index') }}"><i class="fa fa-edit"></i><span>Uni_coordinators</span></a>
                </li>
                
                <li class="{{ Request::is('Advisor*') ? 'active' : '' }}">
                <a href="{{ route('Advisor.index') }}"><i class="fa fa-edit"></i><span>Advisors</span></a>
                </li>
        
                
                <li class="{{ Request::is('usersimport*') ? 'active' : '' }}">
                    <a href= "{{asset('import/import-excel')}}"><i class="fa fa-home"></i><span>students</span></a>
                    </li>
        
        
                <li class="{{ Request::is('departments*') ? 'active' : '' }}">
                <a href= "{{route('departments.index')}}"><i class="fa fa-edit"></i><span>departments</span></a>
                </li>
                <li class="{{ Request::is('companies*') ? 'active' : '' }}">
                <a href="{{ route('companies.index') }}"><i class="fa fa-edit"></i><span>companys</span></a>
                </li>
             
                <li class="{{ Request::is('CompCoordinator*') ? 'active' : '' }}">
                <a href="{{ route('CompCoordinator.index') }}"><i class="fa fa-edit"></i><span>Comp_coordinators</span></a>
                </li>
                <li class="{{ Request::is('internships*') ? 'active' : '' }}">
                    <a href="{{ route('Internship.index') }}"><i class="fa fa-edit"></i><span>internships</span></a>
                    </li>
        
                <li class="{{ Request::is('Supervisor*') ? 'active' : '' }}">
                <a href="{{ route('Supervisor.index') }}"><i class="fa fa-edit"></i><span>Supervisors</span></a>
                </li>
         --}}
                </ul>
        
        
        
                <!-- </ul>
                </li> -->
        
        
                <!-- {{-- <li class="{{ Request::is('companies*') ? 'active' : '' }}">
                <a href="{{ route('companies.index') }}"><i class="fa fa-edit"></i><span>company</span></a>
                </li> --}} -->
        
        
                <!-- {{-- <li class="{{ Request::is('UniCoordinator*') ? 'active' : '' }}">
                <a href="{{ route('UniCoordinator.index') }}"><i class="fa fa-edit"></i><span>Uni_coordinator</span></a>
                </li> --}} -->
        
        
                <!-- <li class="{{ Request::is('CompCoordinator*') ? 'active' : '' }}">
                <a href="{{ route('CompCoordinator.index') }}"><i class="fa fa-edit"></i><span>Comp_coordinator</span></a>
                </li>
                {{-- <li class="{{ Request::is('CompCoordinator*') ? 'active' : '' }}">
                <a href="{{ route('CompCoordinator.index') }}"><i class="fa fa-edit"></i><span>Comp_coordinator</span></a>
                </li> --}} -->
        
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

    <!-- jQuery 3.1.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

    @stack('scripts')
</body>
</html>
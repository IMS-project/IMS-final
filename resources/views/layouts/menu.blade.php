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
        <li class="{{ Request::is('universities*') ? 'active' : '' }}">
            <a href="{{ route('universities.index') }}"><i class="fa fa-graduation-cap"></i><span>universitys</span></a>
        </li>
        <li class="{{ Request::is('UniCoordinator*') ? 'active' : '' }}">
        <a href="{{ route('UniCoordinator.index') }}"><i class="fa fa-edit"></i><span>Uni_coordinators</span></a>
        </li>
        
        <li class="{{ Request::is('Advisor*') ? 'active' : '' }}">
        <a href="{{ route('Advisor.index') }}"><i class="fa fa-edit"></i><span>Advisors</span></a>
        </li>

        <li class="{{ Request::is('Student*') ? 'active' : '' }}">
        <a href="{{ route('Student.index') }}"><i class="fa fa-edit"></i><span>Students</span></a>
        </li>

        <li class="{{ Request::is('usersimport*') ? 'active' : '' }}">
        <a href= "{{asset('import/import-excel')}}"><i class="fa fa-home"></i><span>import</span></a>
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
            <a href="{{ route('internships.index') }}"><i class="fa fa-edit"></i><span>internships</span></a>
            </li>

        <li class="{{ Request::is('Supervisor*') ? 'active' : '' }}">
        <a href="{{ route('Supervisor.index') }}"><i class="fa fa-edit"></i><span>Supervisors</span></a>
        </li>

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

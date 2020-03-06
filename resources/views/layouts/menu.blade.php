

<li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i>
        <span>menu</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    
<ul class="treeview-menu">
    @if(Auth::user()->role == 1)
<li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i>
        <span>admins</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
<ul class="treeview-menu">
<li class="{{ Request::is('admins*') ? 'active' : '' }}">
    <a href="{{ route('admins.index') }}"><i class="fa fa-edit"></i><span>Admins</span></a>
</li>
</ul>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i>
        <span>Users</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
<ul class="treeview-menu">

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-user-circle"></i><span>Users</span></a>
</li>
</ul>
</li>
@endif
@if(Auth::user()->role == 2)
<li class="treeview">
    <a href="#">
        <i class="fa fa-user"></i>
        <span>university</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
<ul class="treeview-menu">
<li class="{{ Request::is('universities*') ? 'active' : '' }}">
    <a href="{{ route('universities.index') }}"><i class="fa fa-edit"></i><span>Universities</span></a>
</li>
<li class="{{ Request::is('universityCoordinators*') ? 'active' : '' }}">
    <a href="{{ route('universityCoordinators.index') }}"><i class="fa fa-edit"></i><span>internsship Coordinators</span></a>
</li>

<li class="{{ Request::is('departments*') ? 'active' : '' }}">
    <a href="{{ route('departments.index') }}"><i class="fa fa-edit"></i><span>Departments</span></a>
</li>
<li class="{{ Request::is('advisors*') ? 'active' : '' }}">
    <a href="{{ route('advisors.index') }}"><i class="fa fa-edit"></i><span>Advisors</span></a>
</li>
<li class="{{ Request::is('placements*') ? 'active' : '' }}">
    <a href="{{ route('placements.index') }}"><i class="fa fa-edit"></i><span>Placements</span></a>
</li>
</ul>
</li>
@endif
@if(Auth::user()->role == 3)
<li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i>
        <span>companies</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
<ul class="treeview-menu">
<li class="{{ Request::is('companies*') ? 'active' : '' }}">
    <a href="{{ route('companies.index') }}"><i class="fa fa-edit"></i><span>Companies</span></a>
</li>
<li class="{{ Request::is('supervisors*') ? 'active' : '' }}">
    <a href="{{ route('supervisors.index') }}"><i class="fa fa-edit"></i><span>Supervisors</span></a>
</li>
<li class="{{ Request::is('companyCoordinators*') ? 'active' : '' }}">
    <a href="{{ route('companyCoordinators.index') }}"><i class="fa fa-edit"></i><span>Company Coordinators</span></a>
</li>
</ul>
</li>
@endif

<li class="treeview">
    <a href="#">
        <i class="fa fa-user-circle"></i>
        <span>chats</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
<ul class="treeview-menu">
<li class="{{ Request::is('chats*') ? 'active' : '' }}">
    <a href="{{ route('chats.index') }}"><i class="fa fa-edit"></i><span>Chats</span></a>
</li>
</ul>
</li>
@if(Auth::user()->role == 4)
<li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i>
        <span>students</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
<ul class="treeview-menu">
    <li class="{{ Request::is('students*') ? 'active' : '' }}">
        <a href="{{ route('students.index') }}"><i class="fa fa-edit"></i><span>Students</span></a>
    </li>
    <li class="{{ Request::is('reports*') ? 'active' : '' }}">
        <a href="{{ route('reports.index') }}"><i class="fa fa-edit"></i><span>Reports</span></a>
    </li>
    <li class="{{ Request::is('attendances*') ? 'active' : '' }}">
        <a href="{{ route('attendances.index') }}"><i class="fa fa-calendar"></i><span>Attendances</span></a>
    </li>
    </ul>
    </li>
    @endif
<li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i>
        <span>roles</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
<ul class="treeview-menu">

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>
</ul>
</li>
</ul>
</li>


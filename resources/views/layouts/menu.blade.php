<li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i>
        <span>menu</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
<li class="{{ Request::is('universities*') ? 'active' : '' }}">
    <a href="{{ route('universities.index') }}"><i class="fa fa-edit"></i><span>university</span></a>
</li>

{{-- <li class="{{ Request::is('universities*') ? 'active' : '' }}">
    <a href="{{ route('universities.index') }}"><i class="fa fa-edit"></i><span>university</span></a>
</li> --}}
<li>
</li>
<li class="{{ Request::is('usersimport*') ? 'active' : '' }}">
    <a href= "{{asset('import/import-excel')}}"><i class="fa fa-edit"></i><span>import</span></a>
</li>
<li class="{{ Request::is('departments*') ? 'active' : '' }}">
    <a href= "{{asset('departments.index')}}"><i class="fa fa-edit"></i><span>departments</span></a>
</li>
    </ul>
</li>

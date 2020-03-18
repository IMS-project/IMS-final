
<li class="{{ Request::is('universities*') ? 'active' : '' }}">
    <a href="{{ route('universities.index') }}"><i class="fa fa-edit"></i><span>university</span></a>
</li>

{{-- <li class="{{ Request::is('universities*') ? 'active' : '' }}">
    <a href="{{ route('universities.index') }}"><i class="fa fa-edit"></i><span>university</span></a>
</li> --}}
<li>
</li>
<li class="{{ Request::is('usersimport*') ? 'active' : '' }}">
    <a href= "import/import-excel"><i class="fa fa-edit"></i><span>import</span></a>
</li>

<li class="{{ Request::is('companies*') ? 'active' : '' }}">
    <a href="{{ route('companies.index') }}"><i class="fa fa-edit"></i><span>company</span></a>
</li>

{{-- <li class="{{ Request::is('companies*') ? 'active' : '' }}">
    <a href="{{ route('companies.index') }}"><i class="fa fa-edit"></i><span>company</span></a>
</li> --}}

<li class="{{ Request::is('UniCoordinator*') ? 'active' : '' }}">
    <a href="{{ route('UniCoordinator.index') }}"><i class="fa fa-edit"></i><span>Uni_coordinator</span></a>
</li>
{{-- <li class="{{ Request::is('UniCoordinator*') ? 'active' : '' }}">
    <a href="{{ route('UniCoordinator.index') }}"><i class="fa fa-edit"></i><span>Uni_coordinator</span></a>
</li> --}}


<li class="{{ Request::is('CompCoordinator*') ? 'active' : '' }}">
    <a href="{{ route('CompCoordinator.index') }}"><i class="fa fa-edit"></i><span>Comp_coordinator</span></a>
</li>
{{-- <li class="{{ Request::is('CompCoordinator*') ? 'active' : '' }}">
    <a href="{{ route('CompCoordinator.index') }}"><i class="fa fa-edit"></i><span>Comp_coordinator</span></a>
</li> --}}

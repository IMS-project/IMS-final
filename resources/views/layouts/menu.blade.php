
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

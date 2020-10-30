<li class="{{ Request::is('divisions*') ? 'active' : '' }}">
    <a href="{{ route('divisions.index') }}"><i class="fa fa-edit"></i><span>Divisions</span></a>
</li>

<li class="{{ Request::is('districts*') ? 'active' : '' }}">
    <a href="{{ route('districts.index') }}"><i class="fa fa-edit"></i><span>Districts</span></a>
</li>

<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{{ route('clients.index') }}"><i class="fa fa-edit"></i><span>Clients</span></a>
</li>

<li class="{{ Request::is('lawyers*') ? 'active' : '' }}">
    <a href="{{ route('lawyers.index') }}"><i class="fa fa-edit"></i><span>Lawyers</span></a>
</li>


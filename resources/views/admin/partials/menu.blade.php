@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.dash') ? 'active' : '' }}" href="{{ route(ADMIN . '.dash') }}">
        <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
        </span>
        <span class="title">Home</span>
    </a>
</li>
<li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-red-500 ti-files"></i> </span><span class="title">My Change</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
    <ul class="dropdown-menu">
        <li><a class="sidebar-link" href="{{url('/createNewChange')}}">Create new change</a></li>
        <li><a class="sidebar-link" href="/search">Search change</a></li>
    </ul>
</li>
<li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-orange-500 ti-layout-list-thumb"></i> </span><span class="title">My Task</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
    <ul class="dropdown-menu">
        <li><a class="sidebar-link" href="basic-table.html">Task assigned to me</a></li>
    </ul>
</li>
<!-- <li class="nav-item">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.users') ? 'active' : '' }}" href="{{ route(ADMIN . '.users.index') }}">
        <span class="icon-holder">
            <i class="c-brown-500 ti-user"></i>
        </span>
        <span class="title">Users</span>
    </a>
</li> -->

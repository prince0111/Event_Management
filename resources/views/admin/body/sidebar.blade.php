@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class="{{($prefix == '/dashboard')?'active':''}}">
                    <a href="{{ route('dashboard') }}"><i data-feather="home"></i> <span>Dashboard</span></a>
                </li>
                <li class="{{($prefix == '/category')?'active':''}}">
                    <a href="{{ route('category.view') }}"><i data-feather="file-text"></i> <span>Manage Catagory</span></a>
                </li>
                <li class="{{($prefix == '/event')?'active':''}}">
                    <a href="{{ route('event.view') }}"><i data-feather="clipboard"></i> <span>Manage Event</span></a>
                </li>
                <li class="{{($prefix == '/attendee')?'active':''}}">
                    <a href="{{ route('attendee.view') }}"><i data-feather="users"></i> <span>Manage Attendee</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>

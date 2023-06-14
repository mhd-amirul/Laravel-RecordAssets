 <!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-text mx-3">Record Assets</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - dashboard -->
    <li class="nav-item  {{ request()->is('dashboard') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route("dashboard") }}">
        <i class="fas fa-fw fa-home"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - item -->
    <li class="nav-item {{ request()->is('item') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route("item") }}">
            <i class="fas fa-fw fa-inbox"></i>
            <span>Item</span>
        </a>
    </li>

    <!-- Nav Item - location -->
    <li class="nav-item {{ request()->is('location') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route("location") }}">
            <i class="fa fa-fw fa-map-marker"></i>
            <span>Location</span>
        </a>
    </li>

    <!-- Nav Item - inventaris -->
    <li class="nav-item {{ request()->is('inventaris') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route("inventaris") }}">
            <i class="fas fa-fw fa-archive"></i>
            <span>Inventaris</span>
        </a>
    </li>

    <!-- Nav Item - room -->
    <li class="nav-item {{ request()->is('room') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route("room") }}">
            <i class="fas fa-fw fa-building"></i>
            <span>Room</span>
        </a>
    </li>

    <!-- Nav Item - kir -->
    <li class="nav-item {{ request()->is('kir') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route("kir") }}">
            <i class="fas fa-fw fa-clone"></i>
            <span>KIR</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

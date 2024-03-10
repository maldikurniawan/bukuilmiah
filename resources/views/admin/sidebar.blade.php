<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SISTEM BUKU ILMIAH</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/home') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Buku Ilmiah
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/bukuajar') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Buku Ajar</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/bukureferensi') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Buku Referensi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/bukumonograf') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Buku Monograf</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/bookchapter') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Book Chapter</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-recycle"></i>
            <span>Sinkronisasi Remun</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

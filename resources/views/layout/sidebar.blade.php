<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-light fa-truck-monster"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Nambang</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @if (session('jabatan') == 'admin')
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('admin') }}"> <i
                    class="fas fa-fw fa-tachometer-alt"></i>Dashboard</a>
        </li>
    @endif
    <li class="nav-item">
        <a class="nav-link" href="{{ url('kendaraan') }}"><i class="fas fa-fw fa-tachometer-alt"></i>Kendaraan</a>
    </li>
    @if (session('jabatan') == 'supervisor')
        <li class="nav-item">
            <a class="nav-link" href="{{ url('supervisor') }}"><i class="fas fa-fw fa-tachometer-alt"></i>Pemesanan</a>
        </li>
    @elseif (session('jabatan') == 'admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/pemesanan') }}"><i
                    class="fas fa-fw fa-tachometer-alt"></i>Pemesanan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/proses') }}"><i class="fas fa-fw fa-tachometer-alt"></i>Pesanan
                Diproses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/servis') }}"><i class="fas fa-fw fa-tachometer-alt"></i>List
                Servis</a>
        </li>
    @endif


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

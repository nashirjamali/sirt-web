<ul class="nav sidebar-inner" id="sidebar-menu">
    <!-- RW MENU -->
    @if(Auth::user()->tipe == 'RW')
    <li>
        <h6 class="px-4 py-2">Menu RW</h6>
    </li>
    <li class="has-sub {{ request()->is('rw/bagian*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/rw/bagian">
            <i class="mdi mdi-office-building"></i>
            <span class="nav-text">Bagian</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('rw/penduduk*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/rw/penduduk">
            <i class="mdi mdi-account-box-multiple"></i>
            <span class="nav-text">Penduduk</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('rw/inventaris*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/rw/inventaris">
            <i class="mdi mdi-archive"></i>
            <span class="nav-text">Inventaris</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('rw/tamu-kunjungan*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/rw/tamu-kunjungan">
            <i class="mdi mdi-account-supervisor-circle"></i>
            <span class="nav-text">Tamu Kunjungan</span>
        </a>
    </li>
    @endif


    
    <!-- RT MENU -->
    @if(Auth::user()->tipe == 'RT')
    <li>
        <h6 class="px-4 py-2">Menu RT</h6>
    </li>
    <li class="has-sub">
        <a class="sidenav-item-link" href="/rt/penduduk">
            <i class="mdi mdi-account-box-multiple"></i>
            <span class="nav-text">Penduduk</span>
        </a>
    </li>
    <li class="has-sub">
        <a class="sidenav-item-link" href="/rt/inventaris">
            <i class="mdi mdi-account-box-multiple"></i>
            <span class="nav-text">Inventaris</span>
        </a>
    </li>
    <li class="has-sub">
        <a class="sidenav-item-link" href="/rt/tamu_kunjungan">
            <i class="mdi mdi-account-box-multiple"></i>
            <span class="nav-text">Tamu Kunjungan</span>
        </a>
    </li>
    @endif
    <hr>




    <!-- Warga MENU -->
    <li>
        <h6 class="px-4 py-2">Menu Warga</h6>
    </li>
    <li class="has-sub">
        <a class="sidenav-item-link" href="#">
            <i class="mdi mdi-account-box-multiple"></i>
            <span class="nav-text">Pengumuman</span>
        </a>
    </li>

</ul>
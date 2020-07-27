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
    <li class="has-sub {{ request()->is('rw/register*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/rw/register">
            <i class="mdi mdi-email-outline"></i>
            <span class="nav-text">Register</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('rw/pengumuman*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/rw/pengumuman">
            <i class="mdi mdi-message-alert-outline"></i>
            <span class="nav-text">Pengumuman</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('rw/pemilu*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/rw/pemilu">
            <i class="mdi mdi-vote"></i>
            <span class="nav-text">Pemilu</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('rw/rapat*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/rw/rapat">
            <i class="mdi mdi-timetable"></i>
            <span class="nav-text">Rapat</span>
        </a>
    </li>
    @endif



    <!-- RT MENU -->
    @if(Auth::user()->tipe == 'RT')
    <li>
        <h6 class="px-4 py-2">Menu RT</h6>
    </li>
    <li class="has-sub {{ request()->is('rt/penduduk*') || request()->is('rt/mutasi*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/rt/penduduk">
            <i class="mdi mdi-account-box-multiple"></i>
            <span class="nav-text">Penduduk</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('rt/inventaris*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/rt/inventaris">
            <i class="mdi mdi-archive"></i>
            <span class="nav-text">Inventaris</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('rt/tamu-kunjungan*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/rt/tamu-kunjungan">
            <i class="mdi mdi-account-supervisor-circle"></i>
            <span class="nav-text">Tamu Kunjungan</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('rt/register*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/rt/register">
            <i class="mdi mdi-email-outline"></i>
            <span class="nav-text">Register</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('rt/request*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/rt/request">
            <i class="mdi mdi-email-plus-outline"></i>
            <span class="nav-text">Request Surat Kependudukan</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('rt/pengumuman*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/rt/pengumuman">
            <i class="mdi mdi-message-alert-outline"></i>
            <span class="nav-text">Pengumuman</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('rt/pemilu*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/rt/pemilu">
            <i class="mdi mdi-vote"></i>
            <span class="nav-text">Pemilu</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('rt/rapat*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/rt/rapat">
            <i class="mdi mdi-timetable"></i>
            <span class="nav-text">Rapat</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('rt/aspirasi*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/rt/aspirasi">
            <i class="mdi mdi-chat-processing"></i>
            <span class="nav-text">Aspirasi</span>
        </a>
    </li>
    @endif
    <hr>



    <!-- Warga MENU -->
    <li>
        <h6 class="px-4 py-2">Menu Warga</h6>
    </li>
    <li class="has-sub {{ request()->is('warga/pengumuman*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/warga/pengumuman">
            <i class="mdi mdi-message-alert-outline"></i>
            <span class="nav-text">Pengumuman</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('warga/request*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/warga/request">
            <i class="mdi mdi-email-plus-outline"></i>
            <span class="nav-text">Request Surat Kependudukan</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('warga/pemilu*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/warga/pemilu">
            <i class="mdi mdi-vote"></i>
            <span class="nav-text">Pemilu</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('warga/aspirasi*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="/warga/aspirasi">
            <i class="mdi mdi-chat-processing"></i>
            <span class="nav-text">Aspirasi</span>
        </a>
    </li>

</ul>
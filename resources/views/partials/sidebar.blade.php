<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <div style="display: flex; flex-direction: column; align-items: center; text-align: center;">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('adminpage/assets/img/logos/logotk.png') }}" class="w-15 h-15 block mx-auto mt-3" alt="main_logo">
            </a>
            <span style="font-weight: bold; font-size: 14px; margin-top: 5px;">
                SIAKAD 
                <p style="font-weight: bold; font-size: 12px;">TKIT Darul Falah Solo Baru</p>
            </span>
        </div>
    </div>

    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard-tkit') ? 'active' : '' }}" href="{{ route('dashboard-tkit') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Master</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('guru.index') ? 'active' : '' }}" href="{{ route('guru.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-lines-fill text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Guru</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('siswa.index') ? 'active' : '' }}" href="{{ route('siswa.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-backpack-fill text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('kelas.index') ? 'active' : '' }}" href="{{ route('kelas.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-menu-button-wide text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kelas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('akademik.index') ? 'active' : '' }}" href="{{ route('akademik.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-calendar-event-fill text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Akademik</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('kegiatan.index') ? 'active' : '' }}" href="{{ route('kegiatan.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-card-checklist text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kegiatan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('penugasan.index') ? 'active' : '' }}" href="{{ route('penugasan.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-calendar2-check-fill text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Penugasan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('tagihan.index') ? 'active' : '' }}" href="{{ route('tagihan.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card-2-back-fill text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tagihan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('absensi.index') ? 'active' : '' }}" href="{{ route('absensi.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-clipboard-check-fill text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Absensi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('nilai.index') ? 'active' : '' }}" href="{{ route('nilai.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-mortarboard-fill text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Penilaian</span>
                </a>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}" class="nav-link">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" 
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-responsive-nav-link>
                </form>
            </li>
        </ul>
    </div>
</aside>
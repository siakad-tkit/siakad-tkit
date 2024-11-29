<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <div style="display: flex; flex-direction: column; align-items: center; text-align: center;">
            <img src="{{asset('adminpage')}}/assets/img/logos/logotk.png"
                 class="w-10 h-10 block mx-auto mt-3"
                 alt="main_logo">

            <span style="font-weight: bold; font-size: 14px; margin-top: 5px;">
        SIAKAD TKIT Darul Falah Solo Baru
    </span>
        </div>

    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('dashboard-tkit') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../pages/billing.html">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Master</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('guru.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tabel Guru</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('siswa.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tabel Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('kelas.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tabel Kelas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('akademik.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tabel Akademik</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('kegiatan.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tabel Kegiatan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('tagihan.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tagihan</span>
                </a>
            </li>
            <a class="nav-link" href="{{ route('penugasan.index') }}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Tabel Penugasan</span>
            </a>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}" class="nav-link">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-responsive-nav-link>
                </form>
            </li>
        </ul>
    </div>
</aside>

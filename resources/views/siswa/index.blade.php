<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/png" href="{{asset('adminpage')}}/assets/img/logos/logotk.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('path/to/font-awesome/css/all.min.css') }}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <title>
    SIAKAD TKIT Darul Falah Solo Baru
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('adminpage')}}/assets/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-dark position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <div style="display: flex; flex-direction: column; align-items: center; text-align: center;">
    <img src="{{asset('adminpage')}}/assets/img/logos/logotk.png"
         width="40px"
         height="40px"
         style="display: block; margin: 0 auto;"
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
          <a class="nav-link " href="{{ route('dashboard-tkit') }}">
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
          <a class="nav-link" href="{{ route('guru.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tabel Guru</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('siswa.index') }}">
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
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">

        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

          <ul class="navbar-nav  justify-content-end">

            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Tabel Siswa</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <a href="{{ route('siswa.create') }}" class="btn btn-info ml-3" style="padding-left:20px; margin-left: 20px;">TAMBAH DATA SISWA</a>
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Foto</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Nama Lengkap</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Nama Panggilan</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Nomor Induk</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">NISN</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Jenis Kelamin</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Tempat Tanggal Lahir</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Agama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Anak ke</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Nama Ayah</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Nama Ibu</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Pekerjaan Ayah</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Pekerjaan Ibu</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Desa / Kelurahan</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Kecamatan</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Kabupaten</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Provinsi</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">No Tlp</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($siswas as $siswa)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{ Storage::url('').$siswa->foto }}" class="rounded-circle" style="width: 80px; height: 85px">
                          </div>
                        </div>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $siswa->nama }}</p>
                          </div>
                        <div>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $siswa->panggilan }}</p>
                          </div>
                        <div>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $siswa->no_induk }}</p>
                          </div>
                        <div>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $siswa->nisn }}</p>
                          </div>
                        <div>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $siswa->kelamin }}</p>
                          </div>
                        <div>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $siswa->tempat_lahir }}, {{ $siswa->tanggal_lahir }}</p>
                          </div>
                        <div>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $siswa->agama }}</p>
                          </div>
                        <div>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $siswa->anak_ke }}</p>
                          </div>
                        <div>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $siswa->ayah }}</p>
                          </div>
                        <div>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $siswa->ibu }}</p>
                          </div>
                        <div>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $siswa->pekerjaan_ayah }}</p>
                          </div>
                        <div>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $siswa->pekerjaan_ibu }}</p>
                          </div>
                        <div>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $siswa->kelurahan }}</p>
                          </div>
                        <div>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $siswa->kecamatan }}</p>
                          </div>
                        <div>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $siswa->kabupaten }}</p>
                          </div>
                        <div>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $siswa->provinsi }}</p>
                          </div>
                        <div>
                      </td>
                      <td>
                        <div>
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0">{{ $siswa->no }}</p>
                          </div>
                        <div>
                      </td>
                      <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin?');" action="{{ route('siswa.destroy', $siswa->id) }}" method="POST">
                          <!-- Tombol Edit -->
                          <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-primary">
                            <i class="fa fa-pencil-alt"></i> <!-- Ikon Pensil -->
                          </a>
                          @csrf
                          @method('DELETE')
                          <!-- Tombol Hapus -->
                          <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash-alt"></i> <!-- Ikon Tempat Sampah -->
                          </button>
                        </form>
                      </td>
                    </tr>
                  @empty
                    <tr>
                        <td colspan="1">No data available</td>
                    </tr>
                  @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="" class="font-weight-bold" target="_blank">Tim Pengabdian ITSPKU</a>

              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('adminpage')}}/assets/js/core/popper.min.js"></script>
  <script src="{{asset('adminpage')}}/assets/js/core/bootstrap.min.js"></script>
  <script src="{{asset('adminpage')}}/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="{{asset('adminpage')}}/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('adminpage')}}/assets/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>

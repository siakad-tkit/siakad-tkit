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
        <a href="{{ route('welcome') }}">
          <img src="{{asset('adminpage')}}/assets/img/logos/logotk.png"
         class="w-15 h-15 block mx-auto mt-3"
         alt="main_logo">

    
        </a>
        <span style="font-weight: bold; font-size: 14px; margin-top: 5px;">
          SIAKAD 
          <p style=" font-weight:bold; font-size: 12px;">TKIT Darul Falah Solo Baru</p>
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
          <a class="nav-link" href="{{ route('akademik.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tabel Akademik</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('kegiatan.index') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Tabel Kegiatan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('penugasan.index') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Penugasan</span>
            </a>
        </li>
        <li class="nav-item">
          <li class="nav-item">
            <a class="nav-link " href="{{ route('tagihan.index') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Tagihan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  " href="{{ route('absensi.index') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Absensi</span>
            </a>
        </li>
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
              <a href="javascript:(0)" class="nav-link text-white p-0" id="iconNavbarSidenav">
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
              <h6>Tabel Kegiatan</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <a href="javascript:void(0)" class="btn btn-info ml-3" id="create-new-kegiatan" style="margin-left:15px;">Tambah Data kegiatan</a>
            <br><br>
            <table class="table table-bordered table-striped" id="laravel_11_datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Bulan</th>
                        <th>Minggu Ke</th>
                        <th>Hari, Tanggal</th>
                        <th>Nama Kegiatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kegiatans as $kegiatan)
                    <tr id="index_{{ $kegiatan->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kegiatan->bulan }}</td>
                        <td>{{ $kegiatan->minggu }}</td>
                        <td>{{ $kegiatan->hari }}, {{ $kegiatan->tanggal }}</td>
                        <td>{{ $kegiatan->kegiatan }}</td>
                        <td>
                            <a href="javascript:void(0)" id="btn-edit-post" data-id="{{ $kegiatan->id }}" class="btn btn-primary">
                              <i class="fa fa-pencil-alt"></i>
                            </a>

                            <a href="javascript:void(0)" id="btn-delete-post" data-id="{{ $kegiatan->id }}" class="btn btn-danger">
                              <i class="fa fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Modal -->
            <div class="modal fade" id="ajax-kegiatan-modal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="kegiatanCrudModal"></h4>
                        </div>
                        <div class="modal-body">
                            <form id="kegiatanForm" name="kegiatanForm" class="form-horizontal">
                                <input type="hidden" name="kegiatan_id" id="kegiatan_id">
                                <div class="form-group">
                                    <label for="bulan" class="col-sm-3 control-label">Bulan</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="bulan" name="bulan" required>
                                            <option value="">-- Pilih Bulan --</option>
                                            <option value="Januari">Januari</option>
                                            <option value="Februari">Februari</option>
                                            <option value="Maret">Maret</option>
                                            <option value="April">April</option>
                                            <option value="Mei">Mei</option>
                                            <option value="Juni">Juni</option>
                                            <option value="Juli">Juli</option>
                                            <option value="Agustus">Agustus</option>
                                            <option value="September">September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="November">November</option>
                                            <option value="Desember">Desember</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="minggu" class="col-sm-3 control-label">Minggu Ke</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="minggu" name="minggu" required>
                                            <option value="" disabled selected>Pilih Minggu</option>
                                            <option value="1">Minggu Ke-1</option>
                                            <option value="2">Minggu Ke-2</option>
                                            <option value="3">Minggu Ke-3</option>
                                            <option value="4">Minggu Ke-4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hari" class="col-sm-3 control-label">Hari</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="hari" name="hari" required>
                                            <option value="" disabled selected>Pilih Hari</option>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kegiatan" class="col-sm-3 control-label">Nama Kegiatan</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="kegiatan" name="kegiatan" required>
                                    </div>
                                </div>
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" id="btn-save" value="create">Simpan</button>
                                </div>
                            </form>
                        </div>
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
  </main>

      </div>
    </div>
    <script>
    var SITEURL = "{{ url('/') }}/";

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#laravel_11_datatable').DataTable();

        $('#create-new-kegiatan').click(function() {
            $('#btn-save').val("create-kegiatan");
            $('#kegiatan_id').val('');
            $('#kegiatanForm').trigger("reset");
            $('#kegiatanCrudModal').html("Tambah Data Kegiatan");
            $('#ajax-kegiatan-modal').modal('show');
            $('#modal-preview').attr('src', 'https://via.placeholder.com/150').addClass('hidden');
        });

        $('body').on('click', '#btn-edit-post', function() {
        var id = $(this).data('id');
        $.get(SITEURL + 'kegiatan/index/kegiatanEdit/' + id, function(data) {
            $('#kegiatanCrudModal').html("Edit Data Kegiatan");
            $('#btn-save').val("edit-kegiatan");
            $('#ajax-kegiatan-modal').modal('show');
            $('#kegiatan_id').val(data.id);
            $('#bulan').val(data.bulan);
            $('#minggu').val(data.minggu);
            $('#hari').val(data.hari);
            $('#tanggal').val(data.tanggal);
            $('#bulan').val(data.kegiatan);
          });
        });

        $('body').on('click', '#btn-delete-post', function() {
            var id = $(this).data("id");

            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    type: "DELETE",
                    url: SITEURL + "kegiatan/index/kegiatanDelete/" + id,
                    success: function(data) {
                        console.log("Data berhasil dihapus:", data);
                        var oTable = $('#laravel_11_datatable').DataTable();
                        location.reload();
                    },
                    error: function(data) {
                        console.error("Error saat menghapus data:", data);
                    }
                });
            }
        });

        $('body').on('submit', '#kegiatanForm', function(e) {
        e.preventDefault();

        var id = $('#kegiatan_id').val();
        var actionType = $('#btn-save').val();
        var formData = $(this).serialize();

        $('#btn-save').html('Menyimpan..');

        $.ajax({
            type: actionType === "edit-kegiatan" ? 'PUT' : 'POST',
            url: actionType === "edit-kegiatan" ? SITEURL + 'kegiatan/index/kegiatanUpdate/' + id : SITEURL + 'kegiatan/index/kegiatanStore',
            data: formData,
            success: function(response) {
                $('#kegiatanForm').trigger("reset");
                $('#ajax-kegiatan-modal').modal('hide');
                $('#btn-save').html('Simpan');
                location.reload();
            },
            error: function(xhr) {
                console.error("Error:", xhr.responseText);
                $('#btn-save').html('Simpan');
            }
            });
          });
    });
</script>

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

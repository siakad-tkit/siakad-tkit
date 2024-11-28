<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/png" href="{{ asset('adminpage/assets/img/logos/logotk.png') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <title>SIAKAD TKIT Darul Falah Solo Baru</title>
  
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="{{ asset('adminpage/assets/css/argon-dashboard.css?v=2.1.0') }}" rel="stylesheet" />

  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-dark position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <div style="display: flex; flex-direction: column; align-items: center; text-align: center;">
        <img src="{{ asset('adminpage/assets/img/logos/logotk.png') }}" width="40px" height="40px" alt="main_logo">
        <span style="font-weight: bold; font-size: 14px; margin-top: 5px;">SIAKAD TKIT Darul Falah Solo Baru</span>
      </div>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard-tkit') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/billing.html">
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
          <a class="nav-link" href="{{ route('siswa.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tabel Siswa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('kelas.index') }}">
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
          <a class="nav-link" href="{{ route('kegiatan.index') }}">
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
            <span class="nav-link-text ms-1">Tabel Penugasan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('tagihan.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tagihan</span>
          </a>
        </li>
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}" class="nav-link">
            @csrf
            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
              {{ __('Logout') }}
            </x-responsive-nav-link>
          </form>
        </li>
      </ul>
    </div>
  </aside>

  <main class="main-content position-relative border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <ul class="navbar-nav justify-content-end">
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

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Tagihan</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <a href="javascript:void(0)" class="btn btn-info ml-3" id="create-new-tagihan" style="margin-left:15px;">Tambah Data</a>
                <br><br>
                <table class="table table-bordered table-striped" id="laravel_11_datatable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Siswa</th>
                      <th>Kelas</th>
                      <th>Bulan</th>
                      <th>Jenis</th>
                      <th>Nominal</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($tagihans as $tagihan)
                    <tr id="index_{{ $tagihan->id }}">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $tagihan->siswa->nama ?? 'Tidak Ada' }}</td>
                      <td>{{ $tagihan->kelas->nama ?? 'Tidak Ada' }}</td>
                      <td>{{ $tagihan->bulan }}</td>
                      <td>{{ $tagihan->jenis }}</td>
                      <td>{{ $tagihan->nominal }}</td>
                      <td>{{ $tagihan->status }}</td>
                      <td>{{ $tagihan->tanggal }}</td>
                      <td>
                        <a href="javascript:void(0)" id="btn-edit-post" data-id="{{ $tagihan->id }}" class="btn btn-primary">
                          <i class="fa fa-pencil-alt"></i>
                        </a>
                        <a href="javascript:void(0)" id="btn-delete-post" data-id="{{ $tagihan->id }}" class="btn btn-danger">
                          <i class="fa fa-trash-alt"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

                <div class="modal fade" id="ajax-tagihan-modal" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="tagihanCrudModal"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        <form id="tagihanForm" name="tagihanForm" class="form-horizontal">
                          <input type="hidden" name="tagihan_id" id="tagihan_id">
                          <div class="form-group">
                            <label for="siswa_id" class="control-label">Siswa</label>
                            <select class="form-control" id="siswa_id" name="siswa_id" required>
                              <option value="" disabled selected>Pilih Siswa</option>
                              @foreach (App\Models\Siswa::all() as $siswa)
                                  <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="kelas_id" class="control-label">Kelas</label>
                            <select class="form-control" id="kelas_id" name="kelas_id" required>
                              <option value="" disabled selected>Pilih Kelas</option>
                              @foreach (App\Models\Kelas::all() as $kls)
                                  <option value="{{ $kls->id }}">{{ $kls->nama }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="bulan" class="control-label">Bulan</label>
                            <input type="text" class="form-control" id="bulan" name="bulan" placeholder="Masukkan Bulan" required>
                          </div>
                          <div class="form-group">
                            <label for="jenis" class="control-label">Jenis</label>
                            <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Masukkan Jenis" required>
                          </div>
                          <div class="form-group">
                            <label for="nominal" class="control-label">Nominal</label>
                            <input type="text" class="form-control" id="nominal" name="nominal" placeholder="Masukkan Nominal" required>
                          </div>
                          <div class="form-group">
                            <label for="status" class="control-label">Status</label>
                            <input type="text" class="form-control" id="status" name="status" placeholder="Masukkan Status" required>
                          </div>
                          <div class="form-group">
                            <label for="tanggal" class="control-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                          </div>
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="btn-save" value="create">Simpan</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <footer class="footer pt-3">
                  <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                      <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                          © <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart"></i> by
                          <a href="#" class="font-weight-bold" target="_blank">Tim Pengabdian ITSPKU</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </footer>
              </div>
            </div>
          </div>
        </div>
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

          $('#create-new-tagihan').click(function() {
              $('#btn-save').val("create-tagihan");
              $('#tagihan_id').val('');
              $('#tagihanForm').trigger("reset");
              $('#tagihanCrudModal').html("Tambah Data Tagihan");
              $('#ajax-tagihan-modal').modal('show');
              $('#modal-preview').attr('src', 'https://via.placeholder.com/150').addClass('hidden');

          });

          $('body').on('click', '#btn-edit-post', function() {
              var id = $(this).data('id');
              $.get(SITEURL + 'tagihan/' + id + '/edit', function(data) {
                  $('#tagihanCrudModal').html("Edit Data Tagihan");
                  $('#btn-save').val("edit-tagihan");
                  $('#ajax-tagihan-modal').modal('show');
                  $('#tagihan_id').val(data.id);
                  $('#siswa_id').val(data.siswa_id);
                  $('#kelas_id').val(data.kelas_id);
                  $('#bulan').val(data.bulan);
                  $('#jenis').val(data.jenis);
                  $('#nominal').val(data.nominal);
                  $('#status').val(data.status);
                  $('#tanggal').val(data.tanggal);
              });
          });

          $('body').on('click', '#btn-delete-post', function() {
              var id = $(this).data("id");

              if (confirm("Are you sure you want to delete this?")) {
                  $.ajax({
                      type: "DELETE",
                      url: SITEURL + "tagihan/" + id,
                      success: function(data) {
                          console.log("Data berhasil dihapus:", data);
                          var oTable = $('#laravel_11_datatable').DataTable();
                          oTable.row('#index_' + id).remove().draw();
                      },
                      error: function(data) {
                          console.error("Error saat menghapus data:", data);
                      }
                  });
              }
          });


          $('body').on('submit', '#tagihanForm', function(e) {
            e.preventDefault();
            var id = $('#tagihan_id').val();
            var actionType = $('#btn-save').val();
            var formData = $(this).serialize();
            
            
            $('#btn-save').html('Menyimpan..');
            $.ajax({
              type: actionType === "edit-tagihan" ? 'PUT' : 'POST',
              url: actionType === "edit-tagihan" ? SITEURL + 'tagihan/index/tagihanUpdate/' + id : SITEURL + 'tagihan/index/tagihanStore',
              data: formData,
              success: function(response) {
                $('#tagihanForm').trigger("reset");
                $('#ajax-tagihan-modal').modal('hide');
                $('#btn-save').html('Simpan');
                location.reload();
            },
            error: function(xhr) {
                console.error("Error:", xhr.responseText);
                $('#btn-save').html('Simpan');
            }
            });
          });

        // Preview Gambar
        function readURL(input, id) {
            id = id || '#modal-preview';
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(id).attr('src', e.target.result).removeClass('hidden');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    });
    </script>

    <!-- Core JS Files -->
    <!--   Core JS Files   -->
  <script src="{{asset('adminpage')}}/assets/js/core/popper.min.js"></script>
  <script src="{{asset('adminpage')}}/assets/js/core/bootstrap.min.js"></script>
  <script src="{{asset('adminpage')}}/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="{{asset('adminpage')}}/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('adminpage')}}/assets/js/argon-dashboard.min.js?v=2.1.0"></script>
  </div>
</body>
</html>
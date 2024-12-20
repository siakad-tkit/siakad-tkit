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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

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
  @include('partials.sidebar')
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
              <h6>Absensi</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <a href="javascript:void(0)" class="btn btn-info ml-3" id="create-new-absensi" style="margin-left:15px;">Tambah Data absensi</a>
            <br><br>
            <table class="table table-bordered table-striped" id="laravel_11_datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Siswa</th>
                        <th>Nama Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($absensis as $absensi)
                    <tr id="index_{{ $absensi->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $absensi->tanggal }}</td>
                        <td>{{ $absensi->siswa->nama ?? 'Tidak Ada' }}</td>
                        <td>{{ $absensi->kelas->nama ?? 'Tidak Ada' }}</td>
                        <td>
                            <a href="javascript:void(0)" id="btn-edit-post" data-id="{{ $absensi->id }}" class="btn btn-primary">
                              <i class="fa fa-pencil-alt"></i>
                            </a>

                            <a href="javascript:void(0)" id="btn-delete-post" data-id="{{ $absensi->id }}" class="btn btn-danger">
                              <i class="fa fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Modal -->
            <div class="modal fade" id="ajax-absensi-modal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="absensiCrudModal"></h4>
                        </div>
                        <div class="modal-body">
                            <form id="absensiForm" name="absensiForm" class="form-horizontal">
                                <input type="hidden" name="absensi_id" id="absensi_id">
                                <div class="form-group">
                                    <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="siswa_id" class="col-sm-3 control-label">Nama Siswa</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="siswa_id" name="siswa_id" required>
                                            <option value="" disabled selected>Pilih Nama Siswa</option>
                                            @foreach(App\Models\Siswa::all() as $siswa)
                                                <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="kelas_id" class="col-sm-3 control-label">Kelas</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="kelas_id" name="kelas_id" required>
                                            <option value="" disabled selected>Pilih Kelas</option>
                                            @foreach(App\Models\Kelas::all() as $kelas)
                                                <option value="{{ $kelas->id }}">{{ $kelas->nama }}</option>
                                            @endforeach
                                        </select>
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

        $('#create-new-absensi').click(function() {
            $('#btn-save').val("create-absensi");
            $('#absensi_id').val('');
            $('#absensiForm').trigger("reset");
            $('#absensiCrudModal').html("Tambah Data Absensi");
            $('#ajax-absensi-modal').modal('show');
            $('#modal-preview').attr('src', 'https://via.placeholder.com/150').addClass('hidden');
        });

        $('body').on('click', '#btn-edit-post', function() {
        var id = $(this).data('id');
        $.get(SITEURL + 'absensi/index/absensiEdit/' + id, function(data) {
            $('#absensiCrudModal').html("Edit Data Absensi");
            $('#btn-save').val("edit-absensi");
            $('#ajax-absensi-modal').modal('show');
            $('#absensi_id').val(data.id);
            $('#tanggal').val(data.tanggal);
            $('#siswa_id').val(data.siswa_id);
            $('#kelas_id').val(data.kelas_id);
          });
        });

        $('body').on('click', '#btn-delete-post', function() {
            var id = $(this).data("id");

            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    type: "DELETE",
                    url: SITEURL + "absensi/index/absensiDelete/" + id,
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

        $('body').on('submit', '#absensiForm', function(e) {
        e.preventDefault();

        var id = $('#absensi_id').val();
        var actionType = $('#btn-save').val();
        var formData = $(this).serialize();

        $('#btn-save').html('Menyimpan..');

        $.ajax({
            type: actionType === "edit-absensi" ? 'PUT' : 'POST',
            url: actionType === "edit-absensi" ? SITEURL + 'absensi/index/absensiUpdate/' + id : SITEURL + 'absensi/index/absensiStore',
            data: formData,
            success: function(response) {
                $('#absensiForm').trigger("reset");
                $('#ajax-absensi-modal').modal('hide');
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

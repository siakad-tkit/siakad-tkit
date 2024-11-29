<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
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
              <h6>Tabel Kelas</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <a href="javascript:void(0)" class="btn btn-info ml-3" id="create-new-kelas" style="margin-left:15px;">Tambah Data Kelas</a>
            <br><br>
            <table class="table table-bordered table-striped" id="laravel_11_datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kelas</th>
                        <th>Jumlah Siswa</th>
                        <th>ID Penugasan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kelas as $kelas)
                    <tr id="index_{{ $kelas->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kelas->nama }}</td>
                        <td>{{ $kelas->jml_siswa }}</td>
                        <td>{{ $kelas->penugasan->nama ?? 'Tidak Ada' }}</td>
                        <td>
                            <a href="javascript:void(0)" id="btn-edit-post" data-id="{{ $kelas->id }}" class="btn btn-primary">
                              <i class="fa fa-pencil-alt"></i>
                            </a>

                            <a href="javascript:void(0)" id="btn-delete-post" data-id="{{ $kelas->id }}" class="btn btn-danger">
                              <i class="fa fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Modal -->
            <div class="modal fade" id="ajax-kelas-modal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="kelasCrudModal"></h4>
                        </div>
                        <div class="modal-body">
                            <form id="kelasForm" name="kelasForm" class="form-horizontal">
                                <input type="hidden" name="kelas_id" id="kelas_id">
                                <div class="form-group">
                                    <label for="nama" class="col-sm-2 control-label">Nama Kelas</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="nama" name="nama" required>
                                            <option value="">Pilih Kelas</option>
                                            <option value="A1">A1</option>
                                            <option value="A2">A2</option>
                                            <option value="A3">A3</option>
                                            <option value="B1">B1</option>
                                            <option value="B2">B2</option>
                                            <option value="B3">B3</option>
                                        </select>
                                    </div>
                                </div>
                                   <div class="form-group">
                                    <label for="jml_siswa" class="col-sm-3 control-label">Jumlah Siswa</label>
                                    <div class="col-sm-12">
                                        <input type="number" class="form-control" id="jml_siswa" name="jml_siswa" placeholder="Masukkan Jumlah Siswa" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="penugasan_id" class="col-sm-3 control-label">Nama Siswa</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="penugasan_id" name="penugasan_id" required>
                                            <option value="" disabled selected>Pilih Nama Siswa</option>
                                            @foreach(App\Models\Penugasan::all() as $penugasan)
                                                <option value="{{ $penugasan->id }}">{{ $penugasan->id }}</option>
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

        $('#create-new-kelas').click(function() {
            $('#btn-save').val("create-kelas");
            $('#kelas_id').val('');
            $('#kelasForm').trigger("reset");
            $('#kelasCrudModal').html("Tambah Data Kelas");
            $('#ajax-kelas-modal').modal('show');
            $('#modal-preview').attr('src', 'https://via.placeholder.com/150').addClass('hidden');
        });

        $('body').on('click', '#btn-edit-post', function() {
        var id = $(this).data('id');
        $.get(SITEURL + 'kelas/index/kelasEdit/' + id, function(data) {
            $('#kelasCrudModal').html("Edit Data Kelas");
            $('#btn-save').val("edit-kelas");
            $('#ajax-kelas-modal').modal('show');
            $('#kelas_id').val(data.id);
            $('#nama').val(data.nama);
            $('#jml_siswa').val(data.jml_siswa);
            $('#penugasan_id').val(data.penugasan_id);
          });
        });

        $('body').on('click', '#btn-delete-post', function() {
            var id = $(this).data("id");

            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    type: "DELETE",
                    url: SITEURL + "kelas/index/kelasDelete/" + id,
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

        $('body').on('submit', '#kelasForm', function(e) {
        e.preventDefault();

        var id = $('#kelas_id').val();
        var actionType = $('#btn-save').val();
        var formData = $(this).serialize();

        $('#btn-save').html('Menyimpan..');

        $.ajax({
            type: actionType === "edit-kelas" ? 'PUT' : 'POST',
            url: actionType === "edit-kelas" ? SITEURL + 'kelas/index/kelasUpdate/' + id : SITEURL + 'kelas/index/kelasStore',
            data: formData,
            success: function(response) {
                $('#kelasForm').trigger("reset");
                $('#ajax-kelas-modal').modal('hide');
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

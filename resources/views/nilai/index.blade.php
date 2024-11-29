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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <title>SIAKAD TKIT Darul Falah Solo Baru</title>

  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="{{ asset('adminpage/assets/css/argon-dashboard.css?v=2.1.0') }}" rel="stylesheet" />

  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-dark position-absolute w-100"></div>
  @include('partials.sidebar')

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
              <h6>Penilaian Siswa</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <a href="javascript:void(0)" class="btn btn-info" id="create-new-nilai" style="margin-left:15px;">Tambah Nilai</a>
                <br><br>
                <table class="table table-bordered table-striped" id="laravel_11_datatable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Siswa</th>
                      <th>Kelas</th>
                      <th>Akademik</th>
                      <th>Agama dan Budi Pekerti</th>
                      <th>Jati Diri</th>
                      <th>Literasi dan STEM</th>
                      <th>Project Penguatan Profil Pelajar dan Pancasila</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($nilais as $nilai)
                    <tr id="index_{{ $nilai->id }}">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $nilai->siswa->nama ?? 'Tidak Ada' }}</td>
                      <td>{{ $nilai->kelas->nama ?? 'Tidak Ada' }}</td>
                      <td>{{ $nilai->akademik->nama ?? 'Tidak Ada' }}</td>                      
                      <td>{{ $nilai->agama }}</td>
                      <td>{{ $nilai->jatidiri }}</td>
                      <td>{{ $nilai->stem }}</td>
                      <td>{{ $nilai->project }}</td>
                      <td>
                        <a href="javascript:void(0)" id="btn-edit-nilai" data-id="{{ $nilai->id }}" class="btn btn-primary">
                          <i class="fa fa-pencil-alt"></i>
                        </a>
                        <a href="javascript:void(0)" id="btn-delete-nilai" data-id="{{ $nilai->id }}" class="btn btn-danger">
                          <i class="fa fa-trash-alt"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

                <div class="modal fade" id="ajax-nilai-modal" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="nilaiCrudModal"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        <form id="nilaiForm" name="nilaiForm" class="form-horizontal">
                          <input type="hidden" name="nilai_id" id="nilai_id">
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
                            <label for="akademik_id" class="control-label">Kelas</label>
                            <select class="form-control" id="akademik_id" name="akademik_id" required>
                              <option value="" disabled selected>Pilih Kelas</option>
                              @foreach (App\Models\Akademik::all() as $akd)
                                  <option value="{{ $akd->id }}">{{ $akd->nama }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="agama" class="control-label">Agama dan Budi Pekerti</label>
                            <input type="text" class="form-control" id="agama" name="agama" placeholder="Masukkan Agama dan Budi Pekerti" required>
                          </div>
                          <div class="form-group">
                            <label for="jatidiri" class="control-label">Jati Diri</label>
                            <input type="text" class="form-control" id="jatidiri" name="jatidiri" placeholder="Masukkan Jati Diri" required>
                          </div>
                          <div class="form-group">
                            <label for="stem" class="control-label">Literasi dan STEM</label>
                            <input type="text" class="form-control" id="stem" name="stem" placeholder="Masukkan Literasi dan STEM" required>
                          </div>
                          <div class="form-group">
                            <label for="project" class="control-label">Project</label>
                            <input type="text" class="form-control" id="project" name="project" placeholder="Masukkan Nama Project" required>
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

          $('#create-new-nilai').click(function() {
              $('#btn-save').val("create-nilai");
              $('#nilai_id').val('');
              $('#nilaiForm').trigger("reset");
              $('#nilaiCrudModal').html("Tambah Data Nilai");
              $('#ajax-nilai-modal').modal('show');
          });

          $('body').on('click', '#btn-edit-nilai', function() {
              var id = $(this).data('id');
              $.get(SITEURL + 'nilai/' + id + '/edit', function(data) {
                  $('#nilaiCrudModal').html("Edit Data Nilai");
                  $('#btn-save').val("edit-nilai");
                  $('#ajax-nilai-modal').modal('show');
                  $('#nilai_id').val(data.id);
                  $('#siswa_id').val(data.siswa_id);
                  $('#kelas_id').val(data.kelas_id);
                  $('#akademik_id').val(data.akademik_id);
                  $('#agama').val(data.agama);
                  $('#jatidiri').val(data.jatidiri);
                  $('#stem').val(data.stem);
                  $('#project').val(data.project);
                  $('#tanggal').val(data.created_at.split(' ')[0]);
              });
          });

          $('body').on('click', '#btn-delete-nilai', function() {
              var id = $(this).data("id");

              if (confirm("Are you sure you want to delete this?")) {
                  $.ajax({
                      type: "DELETE",
                      url: SITEURL + "nilai/" + id,
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

          $('body').on('submit', '#nilaiForm', function(e) {
            e.preventDefault();
            var id = $('#nilai_id').val();
            var actionType = $('#btn-save').val();
            var formData = $(this).serialize();

            $('#btn-save').html('Menyimpan..');
            $.ajax({
              type: actionType === "edit-nilai" ? 'PUT' : 'POST',
              url: actionType === "edit-nilai" ? SITEURL + 'nilai/' + id : SITEURL + 'nilai',
              data: formData,
              success: function(response) {
                $('#nilaiForm').trigger("reset");
                $('#ajax-nilai-modal').modal('hide');
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

    <!-- Core JS Files -->
    <script src="{{asset('adminpage')}}/assets/js/core/popper.min.js"></script>
    <script src="{{asset('adminpage')}}/assets/js/core/bootstrap.min.js"></script>
    <script src="{{asset('adminpage')}}/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{asset('adminpage')}}/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{asset('adminpage')}}/assets/js/argon-dashboard.min.js?v=2.1.0"></script>
  </div>
</body>
</html>
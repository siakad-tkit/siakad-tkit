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

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-dark position-absolute w-100"></div>
  @include('partials.sidebar')

  <main class="main-content position-relative border-radius-lg">
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
                      <th>File Rapot</th>
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
                      <td>{{ $nilai->file }}</td>

                      <td>
                        <a href="javascript:void(0)" id="btn-edit-nilai" data-id="{{ $nilai->id }}" class="btn btn-primary">
                          <i class="fa fa-pencil-alt"></i>
                        </a>
                        <a href="javascript:void(0)" id="btn-delete-nilai" data-id="{{ $nilai->id }}" class="btn btn-danger">
                          <i class="fa fa-trash-alt"></i>
                        </a>

                        <a href="{{ asset('storage/file-raport/' . $nilai->file) }}" class="btn btn-success" download>
    <i class="fa fa-download"></i> Download
</a>


                      
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
                        <form id="nilaiForm" name="nilaiForm" class="form-horizontal" enctype="multipart/form-data">
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
                            <label for="akademik_id" class="control-label">Akademik</label>
                            <select class="form-control" id="akademik_id" name="akademik_id" required>
                              <option value="" disabled selected>Pilih Tahun Akademik</option>
                              @foreach (App\Models\Akademik::all() as $akd)
                                  <option value="{{ $akd->id }}">{{ $akd->nama }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="file" class="control-label">Rapot</label>
                            <input type="file" class="form-control" id="file" name="file" accept=".pdf,.doc,.docx,.ppt,.pptx" required>
                            <img id="modal-preview" class="mt-2 hidden" style="max-width: 150px;" />
                            <input type="hidden" id="hidden_file" name="hidden_file">
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
  </main>

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
          $('#file').val(data.file);
          if (data.file) {
            $('#modal-preview').attr('src', SITEURL + 'storage/' + data.file).removeClass('hidden');
            $('#hidden_file').val(data.file);
          } else {
            $('#modal-preview').addClass('hidden');
            $('#hidden_file').val('');
          }
        });
      });

      $('body').on('click', '#btn-delete-nilai', function() {
        var id = $(this).data("id");

        if (confirm("Are you sure you want to delete this?")) {
          $.ajax({
            type: "DELETE",
            url: SITEURL + "nilai/" + id,
            success: function(data) {
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
        var formData = new FormData(this);

        $('#btn-save').html('Menyimpan..');
        $.ajax({
          type: actionType === "edit-nilai" ? 'PUT' : 'POST',
          url: actionType === "edit-nilai" ? SITEURL + 'nilai/' + id : SITEURL + 'nilai',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            var oTable = $('#laravel_11_datatable').DataTable();
            oTable.draw();
            $('#nilaiForm').trigger("reset");
            $('#ajax-nilai-modal').modal('hide');
            
            location.reload();
          },
          error: function(data) {
            console.error("Error saat menyimpan data:", data);
          }
        });
      });
    });
  </script>
</body>

</html>

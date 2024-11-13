<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Guru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-group">
                                <label class="font-weight-bold">FOTO</label>
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                                @error('foto')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                                @if ($guru->foto)
                                    <img src="{{ Storage::url('public/foto-guru/'.$guru->foto) }}" class="rounded mt-2" style="width: 150px">
                                @endif
                            </div>

                            
                            <div class="form-group">
                                <label class="font-weight-bold">Status</label>
                                <select class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status', $guru->status) }}">
                                    <option value="">-- Pilih Status --</option>
                                    <option value="pns" {{ old('status') == 'pns' ? 'selected' : '' }}>PNS</option>
                                    <option value="cpns" {{ old('status') == 'cpns' ? 'selected' : '' }}>CPNS</option>
                                    <option value="honorer" {{ old('status') == 'honorer' ? 'selected' : '' }}>Honorer</option>
                                    <option value="swasta" {{ old('status') == 'swasta' ? 'selected' : '' }}>Swasta</option>
                                </select>
                                <!-- error message untuk status -->
                                @error('status')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Bagian</label>
                                <select class="form-control @error('bagian') is-invalid @enderror" name="bagian">
                                    <option value="">-- Pilih Bagian --</option>
                                    <option value="akademik" {{ old('bagian') == 'akademik' ? 'selected' : '' }}>Akademik</option>
                                    <option value="nonakademik" {{ old('bagian') == 'nonakademik' ? 'selected' : '' }}>Nonakademik</option>
                                </select>
                                <!-- error message untuk bagian -->
                                @error('bagian')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $guru->nama) }}" placeholder="Masukkan Nama">
                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="font-weight-bold">NIP</label>
                                <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip', $guru->nip) }}" placeholder="Masukkan NIP">
                                <!-- error message untuk nip -->
                                @error('nip')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NUPTK</label>
                                <input type="text" class="form-control @error('nuptk') is-invalid @enderror" name="nuptk" value="{{ old('nuptk', $guru->nuptk) }}" placeholder="Masukkan NUPTK">
                                <!-- error message untuk nuptk -->
                                @error('nuptk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tempat Lahir</label>
                                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir', $guru->tempat_lahir) }}" placeholder="Masukkan Tempat Lahir">
                                <!-- error message untuk tempat lahir -->
                                @error('tempat_lahir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Lahir</label>
                                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir', $guru->tanggal_lahir) }}">
                                <!-- error message untuk tanggal lahir -->
                                @error('tanggal_lahir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Agama</label>
                                <select class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama', $guru->agama) }}">
                                    <option value="">-- Pilih Agama --</option>
                                    <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                    <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                    <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                    <option value="Buddha" {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                    <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                </select>
                                <!-- error message untuk agama -->
                                @error('agama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Status Nikah</label>
                                <select class="form-control @error('status_nikah') is-invalid @enderror" name="status_nikah">
                                    <option value="">-- Pilih Status Nikah --</option>
                                    <option value="menikah" {{ old('status_nikah') == 'menikah' ? 'selected' : '' }}>Menikah</option>
                                    <option value="belum_menikah" {{ old('status_nikah') == 'belum_menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                </select>
                                <!-- error message untuk status nikah -->
                                @error('status_nikah')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jenis Kelamin</label>
                                <select class="form-control @error('kelamin') is-invalid @enderror" name="kelamin">
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="laki" {{ $guru->kelamin == 'laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="perempuan" {{ $guru->kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                                @error('kelamin')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $guru->alamat) }}" placeholder="Masukkan Alamat">
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">No Telepon</label>
                                <input type="text" class="form-control @error('no') is-invalid @enderror" name="no" value="{{ old('no', $guru->no) }}" placeholder="Masukkan No Telepon">
                                @error('no')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $guru->email) }}" placeholder="Masukkan Email">
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Mulai Kerja</label>
                                <input type="date" class="form-control @error('mulai_kerja') is-invalid @enderror" name="mulai_kerja" value="{{ old('mulai_kerja', $guru->mulai_kerja) }}">
                                @error('mulai_kerja')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@extends('admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Detail Siswa</div>
                    <div class="panel-body">
                        <a href="{{ route('siswa.index') }}" class="btn btn-primary">Kembali</a>
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama</th>
                                <td>{{ $siswa->nama }}</td>
                            </tr>
                            <tr>
                                <th>Panggilan</th>
                                <td>{{ $siswa->panggilan }}</td>
                            </tr>
                            <tr>
                                <th>No Induk</th>
                                <td>{{ $siswa->no_induk }}</td>
                            </tr>
                            <tr>
                                <th>NISN</th>
                                <td>{{ $siswa->nisn }}</td>
                            </tr>
                            <tr>
                                <th>Kelamin</th>
                                <td>{{ $siswa->kelamin }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>{{ $siswa->tempat_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>{{ $siswa->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td>{{ $siswa->agama }}</td>
                            </tr>
                            <tr>
                                <th>Anak Ke</th>
                                <td>{{ $siswa->anak_ke }}</td>
                            </tr>
                            <tr>
                                <th>Nama Ayah</th>
                                <td>{{ $siswa->ayah }}</td>
                            </tr>
                            <tr>
                                <th>Nama Ibu</th>
                                <td>{{ $siswa->ibu }}</td>
                            </tr>
                            <tr>
                                <th>Pekerjaan Ayah</th>
                                <td>{{ $siswa->pekerjaan_ayah }}</td>
                            </tr>
                            <tr>
                                <th>Pekerjaan Ibu</th>
                                <td>{{ $siswa->pekerjaan_ibu }}</td>
                            </tr>
                            <tr>
                                <th>Desa / Kelurahan</th>
                                <td>{{ $siswa->kelurahan }}</td>
                            </tr>
                            <tr>
                                <th>Kecamatan</th>
                                <td>{{ $siswa->kecamatan }}</td>
                            </tr>
                            <tr>
                                <th>Kabupaten</th>
                                <td>{{ $siswa->kabupaten }}</td>
                            </tr>
                            <tr>
                                <th>Provinsi</th>
                                <td>{{ $siswa->provinsi }}</td>
                            </tr>
                            <tr>
                                <th>No Telepon</th>
                                <td>{{ $siswa->no }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

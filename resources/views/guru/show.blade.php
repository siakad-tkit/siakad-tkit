@extends('admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Detail Guru</div>
                    <div class="panel-body">
                        <a href="{{ route('guru.index') }}" class="btn btn-primary">Kembali</a>
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama</th>
                                <td>{{ $guru->nama }}</td>
                            </tr>
                            <tr>
                                <th>Panggilan</th>
                                <td>{{ $guru->panggilan }}</td>
                            </tr>
                            <tr>
                                <th>No Induk</th>
                                <td>{{ $guru->no_induk }}</td>
                            </tr>
                            <tr>
                                <th>NISN</th>
                                <td>{{ $guru->nisn }}</td>
                            </tr>
                            <tr>
                                <th>Kelamin</th>
                                <td>{{ $guru->kelamin }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>{{ $guru->tempat_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>{{ $guru->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td>{{ $guru->agama }}</td>
                            </tr>
                            <tr>
                                <th>Anak Ke</th>
                                <td>{{ $guru->anak_ke }}</td>
                            </tr>
                            <tr>
                                <th>Nama Ayah</th>
                                <td>{{ $guru->ayah }}</td>
                            </tr>
                            <tr>
                                <th>Nama Ibu</th>
                                <td>{{ $guru->ibu }}</td>
                            </tr>
                            <tr>
                                <th>Pekerjaan Ayah</th>
                                <td>{{ $guru->pekerjaan_ayah }}</td>
                            </tr>
                            <tr>
                                <th>Pekerjaan Ibu</th>
                                <td>{{ $guru->pekerjaan_ibu }}</td>
                            </tr>
                            <tr>
                                <th>Desa / Kelurahan</th>
                                <td>{{ $guru->kelurahan }}</td>
                            </tr>
                            <tr>
                                <th>Kecamatan</th>
                                <td>{{ $guru->kecamatan }}</td>
                            </tr>
                            <tr>
                                <th>Kabupaten</th>
                                <td>{{ $guru->kabupaten }}</td>
                            </tr>
                            <tr>
                                <th>Provinsi</th>
                                <td>{{ $guru->provinsi }}</td>
                            </tr>
                            <tr>
                                <th>No Telepon</th>
                                <td>{{ $guru->no }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

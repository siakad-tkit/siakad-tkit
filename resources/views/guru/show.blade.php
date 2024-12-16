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
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $guru->id }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td> <img src="{{ Storage::url('').$guru->foto }}" class="rounded-circle" style="width: 80px; height: 85px">
                                    </td>
                                </tr>

                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $guru->nama }}</td>
                                </tr>
                                <tr>
                                    <th>NIP</th>
                                    <td>{{ $guru->nip }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $guru->alamat }}</td>
                                </tr>
                                <tr>
                                    <th>NIP</th>
                                    <td>{{ $guru->nip }}</td>
                                </tr>
                                <tr>
                                    <th>No HP</th>
                                    <td>{{ $guru->nuptk }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $guru->email }}</td>
                                </tr>
                                <tr>
                                    <th>Bagian</th>
                                    <td>{{ $guru->bagian }}</td>
                                </tr>
                            </td>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

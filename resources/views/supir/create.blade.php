@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menambahkan Data Supir</div>

                <div class="card-body justify-content-center" >
                    <form action="{{ route('supir.store') }}" method="post">
                    @csrf

                    <div class="form-group m-2">
                        <label for="nama_lengkap">Nama Lengkap :</label>
                        <input class="form-control" type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" required>
                    </div>

                    <div class="form-group m-2">
                        <label for="nik">NIK : </label>
                        <input class="form-control" type="text" name="nik" placeholder="Masukkan NIK" required>
                    </div>

                    <div class="form-group m-2">
                        <label for="tanggal_lahir">Tanggal Lahir : </label>
                        <input class="form-control" type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" required>
                    </div>

                    <div class="form-group m-2">
                        <label for="alamat">Masukkan Alamat : </label>
                        <input class="form-control" type="text" name="alamat" placeholder="Masukkan Alamat (Sesuai dengan KTP)" required>
                    </div>

                    <div class="form-group m-2">
                        <label for="kota_tempat_tinggal">Masukkan Kota Tempat Tinggal : </label>
                        <input class="form-control" type="text" name="kota_tempat_tinggal" placeholder="Masukkan Kota Tempat Tinggal Saat Ini" required>
                    </div>

                    <button type="submit" class="btn btn-primary m-2">Tambah Supir</button>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Rute Bus</div>
                    </div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kota Tempat Tinggal</th>
                                <th class= "text-center" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($supirs as $supir)
                            <tr>
                                <td>{{ $supir->nama_lengkap }}</td>
                                <td>{{ $supir->nik }}</td>
                                <td>{{ $supir->tanggal_lahir }}</td>
                                <td>{{ $supir->alamat }}</td>
                                <td>{{ $supir->kota_tempat_tinggal }}</td>
                                <td>
                                    <div class="card-body text-center">
                                        <a href="{{ route('supir.edit', $supir->id) }}" class="btn btn-primary">Edit</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="card-body text-center">
                                        <form action="{{ route('supir.destroy', $supir->id) }}" method="post" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Supir</div>

                <div class="card-body justify-content-center" >
                    <form action="{{ route('supir.update', $supir->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    @method('PUT')

                    <div class="form-group m-2">
                        <label for="nama_lengkap">Nama Lengkap :</label>
                        <input class="form-control" type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" value="{{ $supir->nama_lengkap }}" required>
                    </div>

                    <div class="form-group m-2">
                        <label for="nik">NIK : </label>
                        <input class="form-control" type="text" name="nik" placeholder="Masukkan NIK" value="{{ $supir->nik }}" required>
                    </div>

                    <div class="form-group m-2">
                        <label for="tanggal_lahir">Tanggal Lahir : </label>
                        <input class="form-control" type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="{{ $supir->tanggal_lahir }}" required>
                    </div>

                    <div class="form-group m-2">
                        <label for="alamat">Masukkan Alamat : </label>
                        <input class="form-control" type="text" name="alamat" placeholder="Masukkan Alamat (Sesuai dengan KTP)" value="{{ $supir->alamat }}" required>
                    </div>

                    <div class="form-group m-2">
                        <label for="kota_tempat_tinggal">Masukkan Kota Tempat Tinggal : </label>
                        <input class="form-control" type="text" name="kota_tempat_tinggal" placeholder="Masukkan Kota Tempat Tinggal Saat Ini" value="{{ $supir->kota_tempat_tinggal }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary m-2">Simpan</button>

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

@endsection
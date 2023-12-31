<!-- File: create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-body text-center">
            <a href="/penumpang/index" class="btn btn-primary m-2">Back</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data Penumpang</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('penumpang.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="nama_penumpang">Nama Penumpang</label>
                                <input type="text" name="nama_penumpang" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_lahir_penumpang">Tanggal Lahir Penumpang</label>
                                <input type="date" name="tanggal_lahir_penumpang" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="no_telepon_penumpang">Nomor Telepon Penumpang</label>
                                <input type="text" name="no_telepon_penumpang" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="email_penumpang">Email Penumpang</label>
                                <input type="email" name="email_penumpang" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="foto_penumpang">Foto Penumpang</label>
                                <input type="file" name="foto_penumpang" class="form-control" accept="image/*">
                            </div>

                            <button type="submit" class="btn btn-primary m-2">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

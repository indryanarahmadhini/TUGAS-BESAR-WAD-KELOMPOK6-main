@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menambahkan Bus</div>

                <div class="card-body">

                    <form action="{{ route('bus.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group m-2">
                        <label for="nama_perusahaan">Nama Perusahaan:</label>
                        <input class="form-control" type="text" name="nama_perusahaan" required>
                    </div>

                    <div class="form-group m-2">
                        <label for="merk_mobil">Merk Mobil:</label>
                        <input class="form-control" type="text" name="merk_mobil" required>
                    </div>

                    <div class="form-group m-2">
                        <label for="model_mobil">Model Mobil:</label>
                        <input class="form-control" type="text" name="model_mobil" required>
                    </div>

                    <div class="form-group m-2">
                        <label for="foto">Gambar Bus : </label>
                        <input class="form-control" type="file" name="foto" accept="image/" required>
                    </div>

                    @if(session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="text-center m-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                    <div class="text-center">
                        <a href="/bus" class="btn btn-primary text-right">Lihat Daftar Bus</a>
                    </div>

                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
